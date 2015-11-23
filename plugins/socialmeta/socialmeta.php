<?php
/**
 * Social Meta Plugin
 *
 * @package    Morfy
 * @subpackage Plugins
 * @author     Pavel Belousov / pafnuty
 * @version    1.0.1
 * @license    https://github.com/pafnuty-morfy-plugins/morfy-plugin-socialmeta/blob/master/LICENSE MIT
 */

Action::add(
	'theme_meta', 
	function () {
		if (!class_exists('resize')) {
			require_once PLUGINS_PATH . '/socialmeta/classes/resize.php';
		}
		require_once PLUGINS_PATH . '/socialmeta/classes/SocialMeta.php';

		$config = Config::get('plugins.socialmeta');
		$page   = Pages::getCurrentPage();

		$socialMeta = new SocialMeta();

		$title = $page['title'];

		$description = ($page['description']) ? $page['description'] : $page['content'];
		$description = $socialMeta->textLimit($description, 250);

		$twitterImage = (isset($page['twitter_image'])) ? Url::getBase() . $page['twitter_image'] : $socialMeta->getImage($page['content'], $config['twitter']['noimage'], '600x330', '100');

		$facebookImage = (isset($page['og_image'])) ? Url::getBase() . $page['og_image'] : $socialMeta->getImage($page['content'], $config['facebook']['noimage'], '600x315', '100');

		$arTwitter = [
			'twitter:card'        => 'summary_large_image',
			'twitter:site'        => '@' . $config['twitter']['author'],
			'twitter:creator'     => '@' . $config['twitter']['author'],
			'twitter:domain'      => Url::getBase(),
			'twitter:title'       => $title,
			'twitter:description' => $description,
			'twitter:image'       => $twitterImage,
		];

		$arFacebook = [
			'og:type'        => 'website',
			'og:site_name'   => Config::get('site.title'),
			'og:url'         => $page['url'],
			'og:title'       => $title,
			'og:description' => $description,
			'og:image'       => $facebookImage,
		];

		foreach ($arTwitter as $name => $content) {
			echo '<meta name="' . $name . '" content="' . $content . '">';
		}
		foreach ($arFacebook as $property => $content) {
			echo '<meta property="' . $property . '" content="' . $content . '">';
		}

	},
	'100'
);