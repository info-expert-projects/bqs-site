<?php

/**
 * SocialMeta Class
 */
class SocialMeta {
	/**
	 * @param  string  $data
	 * @param  string  $noimage
	 * @param  string  $size
	 * @param  integer  $quality
	 * @param  string  $number
	 * @param  string  $resizeType
	 * @param  boolean $grabRemote
	 */
	public function getImage($data, $noimage = '', $size, $quality = '90', $number = '1', $resizeType = 'crop', $grabRemote = true) {

		$resizeType = ($resizeType == '' || !$resizeType) ? 'auto' : $resizeType;
		$quality    = ($quality == '' || !$quality) ? '100' : $quality;
		$noimage    = Url::getBase() . $noimage;
		// Удалим из адреса сайта последний слеш.
		// Url::getBase() = (substr(Url::getBase(), -1, 1) == '/') ? substr(Url::getBase(), 0, -1) : Url::getBase();
		// Задаём папку  для загрзки картинок по умолчанию.
		$uploadDir = '/social/';

		// Задаём папку для картинок
		$imageDir = $uploadDir . $size . '/';
		$dir      = STORAGE_PATH . $imageDir;

		// $data     = stripslashes($data);
		$arImages = array();
		if (preg_match_all('/<img(?:\\s[^<>]*?)?\\bsrc\\s*=\\s*(?|"([^"]*)"|\'([^\']*)\'|([^<>\'"\\s]*))[^<>]*>/i', $data, $m)) {
			$i = 1; // Счётчик
			// Если регулярка нашла картинку — работаем.
			if (isset($m[1])) {
				foreach ($m[1] as $key => $url) {

					// Если номер картинки меньше, чем требуется — проходим мимо.
					if ($number != 'all' && $i < (int) $number) {
						// Не забываем прибавить счётчик.
						$i++;
						continue;
					}
					$imageItem = $url;
					// Удаляем текущий домен из строки.
					$urlShort = str_ireplace(Url::getBase(), '', $imageItem);
					// Проверяем наша картинка или чужая.
					$isRemote = (preg_match('~^http(s)?://~', $urlShort)) ? true : false;
					// Проверяем разрешено ли тянуть сторонние картинки.
					$grabRemoteOn = ($grabRemote) ? true : false;

					// Отдаём заглушку, если ничего нет.
					if (!$urlShort) {
						$imageItem = $noimage;
						continue;
					}
					// Если внешняя картинка и запрещего грабить картинки к себе — возвращаем её.
					if ($isRemote && !$grabRemoteOn) {
						$imgResized = $urlShort;
						continue;
					}
					// Работаем с картинкой
					// Если есть параметр size — включаем ресайз картинок
					if ($size) {
						// Создаём и назначаем права, если нет таковых
						if (!is_dir($dir)) {
							@mkdir($dir, 0755, true);
							@chmod($dir, 0755);
						}
						if (!chmod($dir, 0755)) {
							@chmod($dir, 0755);
						}
						// Присваиваем переменной значение картинки (в т.ч. если это внешняя картинка)
						$imgResized = $urlShort;
						// Если не внешняя картинка — подставляем корневю дирректорию, чтоб ресайзер понял что ему дают.
						if (!$isRemote) {
							$imgResized = STORAGE_PATH . $urlShort;
						}
						// Определяем новое имя файла
						$fileName = $size . '_' . $resizeType . '_' . strtolower(basename($imgResized));
						// Если картинки нет в папке обработанных картинок
						if (!file_exists($dir . $fileName)) {

							// Если картинка локальная, или картинка внешняя и разрешено тянуть внешние — обработаем её.
							if (!$isRemote || ($grabRemoteOn && $isRemote)) {
								// Разделяем высоту и ширину
								$imgSize = explode('x', $size);
								// Если указана только одна величина - присваиваем второй первую, будет квадрат для exact, auto и crop, иначе класс ресайза жестоко тупит, ожидая вторую переменную.
								if (count($imgSize) == '1') {
									$imgSize[1] = $imgSize[0];
								}
								// @TODO: по хорошему надо бы вынести ресайз в отдельный метод на случай, если понадобится другой класс для ресайза.
								// Подрубаем класс для картинок
								$resizeImg = new resize($imgResized);
								$resizeImg->resizeImage( // Создание уменьшенной копии
									$imgSize[0], // Размер картинки по ширине
									$imgSize[1], // Размер картинки по высоте
									$resizeType // Метод уменьшения (exact, portrait, landscape, auto, crop)
								);
								$resizeImg->saveImage($dir . $fileName, $quality); // Сохраняем картинку в заданную папку
							}
						}

						$imgResized = Url::getBase() . '/storage' . $imageDir . $fileName;

					} else {
						// Если параметра imgSize нет - отдаём исходную картинку
						$imgResized = $urlShort;
					}
					// Отдаём дальше результат обработки.
					$imageItem = $imgResized;

					$arImages[$i] = $imageItem;
					if ($number == $i) {
						break;
					}
					$i++;
				}

			}
		} else {
			// Если регулярка не нашла картинку - отдадим заглушку
			$arImages[$number] = $noimage;
		}
		// Если хотим все картинки — не вопрос, получим массив.
		if ($number == 'all') {

			return $arImages;
		}
		// По умолчанию возвращаем отдну картинку (понимаю, что метод должен возвращать всегда один тип данных, но это сделано из-за совместимости версий)
		return $arImages[$number];
	}

	/**
	 * @param        $data    - контент
	 * @param        $limit
	 * @param string $etc     - Окончание обрезанного текста
	 * @param bool   $wordcut - жесткое ограничение символов
	 *
	 * @internal param $length - максимальный размер возвращаемого контента
	 * @return string $data - обрезанный результат
	 */
	public function textLimit($data, $limit, $etc = '...', $wordcut = false) {
		$data = strip_tags($data, '<br>');
		$data = trim(str_replace(array('<br>', '<br />'), ' ', $data));

		if ($limit && mb_strlen($data) > $limit) {
			$data = mb_substr($data, 0, $limit) . $etc;
			if (!$wordcut && ($word_pos = mb_strrpos($data, ' '))) {
				$data = mb_substr($data, 0, $word_pos) . $etc;
			}
		}
		return $data;
	}
}
