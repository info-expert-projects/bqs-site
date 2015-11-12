<?php
/**
 *  Less Compiler for Morfy
 *
 *  @package Morfy
 *  @subpackage Plugins
 *  @author Pavel Belousov / pafnuty
 *  @version 2.1.0-dev
 *  @license https://github.com/pafnuty/morfy-less/blob/master/LICENSE MIT
 *
 */


Action::add('getCss', function () {
	require_once PLUGINS_PATH . '/less/Less/Less.php';
	require_once PLUGINS_PATH . '/less/lessCompiler.php';

	$lessConfig = Config::get('plugins.less.config');
	

	// Assets folder into theme folder, which contains a folder less
	$assetsFolder = (isset($lessConfig['assetsFolder'])) ? $lessConfig['assetsFolder'] : '/assets';

	// File names for compile without the extension
	$fileNames = (isset($lessConfig['fileNames'])) ? $lessConfig['fileNames'] : array('bootstrap');

	// Output path for CSS file
	$outputPath = (isset($lessConfig['outputPath'])) ? $lessConfig['outputPath'] . '/' : '/css/';

	// Compress CSS file
	$compress = (isset($lessConfig['compress'])) ? $lessConfig['compress'] : true;

	// Generate Sourse Map
	$sourceMap = (isset($lessConfig['sourceMap'])) ? $lessConfig['sourceMap'] : false;

	$localSpaceFolder = '/themes/' . Config::get('system.theme') . $assetsFolder;

	$compile = new lessCompiler(ROOT_DIR, $localSpaceFolder, $fileNames, $outputPath, $compress, $sourceMap);

	// The output is an array
	$file = $compile->compile();

	// If in the array there is an error - so the compilation failed, and you have to report it
	if ($file['error']) {

		if (!file_exists(ROOT_DIR . $localSpaceFolder . '/css/-less-error.css')) {
			$errorStyle = '<style>' . file_get_contents(PLUGINS_PATH . '/less/-less-error.css') . '</style>';
		} else {
			$errorStyle = '<link rel="stylesheet" href="' . $localSpaceFolder . '/css/-less-error.css">';
		}
		$errorText = '<div class="less-error-wrapper"><div class="less-error-content"><div class="less-error"><div class="less-error-header">LessCompiler Error!</div><pre>' . str_replace(ROOT_DIR, '', $file['error']) . '</pre></div></div></div>';
		echo $errorStyle . $errorText;
	}
});

