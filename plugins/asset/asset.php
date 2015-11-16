<?php
/**
 *  Asset Plugin
 *
 *  @package Morfy
 *  @subpackage Plugins
 *  @author Pavel Belousov / pafnuty
 *  @version 1.0.0
 *  @license https://github.com/pafnuty/morfy-plugin-asset/blob/master/LICENSE MIT
 */

require_once PLUGINS_PATH . '/asset/asset.class.php';

Action::add('asset_folder', function (array $folders = array(), array $excludes = array()) {

	$assetConfig = Config::get('plugins.asset');

	$folders  = array_unique(array_filter(array_merge($folders, (array) $assetConfig['folders'])));
	$excludes = array_unique(array_filter(array_merge($excludes, (array) $assetConfig['excludes'])));

	foreach ($folders as $k => $folder) {
		$folders[$k] = '/themes/' . Config::get('system.theme') . $folder;
	}

	Asset::add(
		$folders,
		$excludes
	);
});

Action::add('asset_file', function ($fileName = '', $attributes = '') {

	if ($fileName != '') {
		$fileName = '/themes/' . Config::get('system.theme') . $fileName;
		Asset::addFile(
			$fileName,
			$attributes
		);
	}
});
