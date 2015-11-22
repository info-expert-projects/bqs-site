<?php

/**
 *  Thumb generation plugin for Morfy CMS
 *
 * @package    Morfy
 * @subpackage Plugins
 * @author     Pavel Belousov / pafnuty
 * @version    1.0.0
 * @license    https://github.com/pafnuty-morfy-plugins/morfy-plugin-thumb/blob/master/LICENSE MIT
 *
 */

Shortcode::add(
	'thumb',
	function ($attributes, $content) {
		// Получаем переметры
		extract($attributes);

		$content = trim($content);

		// Если есть контент (картинка) — работаем
		if ($content) {
			$imgResized = $content;

			// Если есть размер — работаем
			if (isset($size)) {
				// Задаём папку для обработанных картинок.
				$uploadDir = (isset($folder)) ? $folder : '/storage/images/thumb/';

				$imageDir = $uploadDir . $size . '/';
				$dir      = ROOT_DIR . $imageDir;

				// Создаём папку при необходимости
				if (!is_dir($dir)) {
					@mkdir($dir, 0755, true);
					@chmod($dir, 0755);
				}
				if (!chmod($dir, 0755)) {
					@chmod($dir, 0755);
				}

				// Определяемся с методами ресайза
				if (isset($method)) {
					switch ($method) {
						case 'exact':
							$method = 'exact';
							break;

						case 'portrait':
							$method = 'portrait';
							break;

						case 'landscape':
							$method = 'landscape';
							break;

						case 'crop':
							$method = 'crop';
							break;

						default:
							$method = 'auto';
							break;
					}
				} else {
					$method = 'auto';
				}

				// Определяемся с качеством картинки на выходе
				$quality = (isset($quality)) ? (string)$quality : '100';

				// Обрезаем текущий домен
				$urlShort = str_ireplace(Url::getBase(), '', $content);

				// Проверяем источник каринки
				$isRemote = (preg_match('~^http(s)?://~', $urlShort)) ? true : false;

				// Присваиваем переменной значение картинки (в т.ч. если это внешняя картинка)
				$imgResized = $urlShort;
				// Если не внешняя картинка — подставляем корневю дирректорию, чтоб ресайзер понял что ему дают.
				if (!$isRemote) {
					$imgResized = ROOT_DIR . $urlShort;
				}

				// Разделяем высоту и ширину
				$imgSize = explode('x', $size);

				// Если указана только одна величина - присваиваем второй первую, будет квадрат для exact, auto и crop, иначе класс ресайза жестоко тупит, ожидая вторую переменную.
				if (count($imgSize) == '1') {
					$imgSize[1] = $imgSize[0];
				}

				// Определяем имя файла
				$fileName = $size . '_' . $method . '_' . strtolower(basename($imgResized));

				// Если картинки нет в папке обработанных картинок — создадим её
				if (!file_exists($dir . $fileName)) {

					// Подключаем класс ресайза
					if (!class_exists('resize')) {
						require_once PLUGINS_PATH . '/thumb/classes/resize.php';
					}

					// Изменяем размер
					$resizeImg = new resize($imgResized);
					$resizeImg->resizeImage( // Создание уменьшенной копии
						$imgSize[0], // Размер картинки по ширине
						$imgSize[1], // Размер картинки по высоте
						$method // Метод уменьшения (exact, portrait, landscape, auto, crop)
					);

					// Сохраняем картинку в заданную папку
					$resizeImg->saveImage($dir . $fileName, $quality);
				}

				$imgResized = Url::getBase() . $imageDir . $fileName;

			}

			$title   = (isset($title)) ? $title : '';
			$alt     = (isset($alt)) ? $alt : '';
			$class   = (isset($class)) ? $class . ' popup-image' : 'popup-image';
			$gallery = (isset($gallery)) ? '-gallery' : '';

			$imageLink = '<a class="' . $class . $gallery . '" href="' . $content . '" title="' . $title . '"><img src="' . $imgResized . '" alt="' . $alt . '"></a>';

			return $imageLink;

		}

		return '';
	}
);

Action::add(
	'theme_header', function () {
	if (Config::get('plugins.thumb.loadcss')) {
		echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css">';
	}
}
);
Action::add(
	'theme_footer', function () {
	if (Config::get('plugins.thumb.loadjs')) {
		echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>';
		echo '<script src="' . Url::getBase() . '/plugins/thumb/assets/js/thumb.js"></script>';
	}
}
);
