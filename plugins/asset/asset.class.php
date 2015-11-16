<?php
/**
 *  Asset Class
 *
 *  @package Morfy
 *  @subpackage Plugins
 *  @author Pavel Belousov / pafnuty
 */

class Asset {

	private function __construct() {}

	/**
	 * @param array $folders
	 * @param array $excludes
	 */
	public static function add($folders, $excludes = array()) {
		// Дополняем переданные префиксы префиксами по умолчанию
		$excludes = array_merge($excludes, array('-', '_'));

		// Получаем реальные пути к папкам
		$folders = self::getRealPath($folders);

		// Добавляем скрипты и стили
		self::addAssets($folders, $excludes);
	}

	/**
	 * @param $filePath
	 * @param $attributes
	 */
	public static function addFile($filePath, $attributes = '') {
		$file        = basename($filePath);
		$folder      = ROOT_DIR . str_replace($file, '', $filePath);
		$localFolder = str_replace(ROOT_DIR, '', $folder);

		self::processFile($folder, $localFolder, $file, array(), $attributes);
	}

	/**
	 * @param array $array
	 *
	 * @return mixed
	 */
	protected static function getRealPath($array) {

		foreach ($array as $k => $path) {
			$array[$k] = ROOT_DIR . $path;
		}

		return $array;

	}

	/**
	 * @param array $arPath
	 * @param array $excludes
	 */
	public static function addAssets($arPath, $excludes) {
		foreach ($arPath as $folder) {
			// Сканируем папку
			if (file_exists($folder)) {
				$f = scandir($folder);
				// Получаем относительный путь
				$localFolder = str_replace(ROOT_DIR, '', $folder);
				// Пробегаем по массиву файлов
				foreach ($f as $file) {
					self::processFile($folder, $localFolder, $file, $excludes);
				}
			}
		}
	}

	/**
	 * @param string $folder
	 * @param string $localFolder
	 * @param string $file
	 * @param array  $excludes
	 * @param string $attributes
	 */
	public static function processFile($folder, $localFolder, $file, $excludes = array(), $attributes = '') {
		// Берём только те файлы, у которых нет исключающего префикса
		if (!self::strposArr($file, $excludes)) {

			// Берём только css и js файлы
			if (preg_match("/(.*?)\\.(css|js)$/im", $file, $matches)) {
				// Для localhost добавляем параметр т.к. файлы кешируются браузером
				$v = fileatime($folder . $file);
				switch ($matches[2]) {
					case 'css':
						// добавляем css-файл
						self::addCss($localFolder . $matches[0], $v, $attributes);
						break;

					case 'js':
						// добавляем js-файл
						self::addJs($localFolder . $matches[0], $v, $attributes);
						break;
				}
			}
		}
	}

	/**
	 * @param string $file
	 * @param string $v
	 * @param string $attributes
	 */

	public static function addCss($file, $v = '1', $attributes = '') {
		// Добавляем css-файл
		echo '<link rel="stylesheet" href="' . $file . '?v=' . $v . '" ' . $attributes . ' />';
	}

	/**
	 * @param string $file
	 * @param string $v
	 * @param string $attributes
	 */
	public static function addJs($file, $v = '1', $attributes = '') {
		// Добавляем js-файл
		echo '<script src="' . $file . '?v=' . $v . '" ' . $attributes . '></script>';
	}

	/**
	 * Небольшое улучшение strpos()
	 *
	 * @param  string $str - строка в кторой будем искать
	 * @param  array  $arr - массив, совпадения с которым ищем.
	 *
	 * @return bool
	 */
	protected static function strposArr($str, $arr) {
		foreach ($arr as $v) {
			if (($pos = strpos($str, $v)) !== false && $pos == '0') {
				return true;
			}
		}

		return false;
	}

}