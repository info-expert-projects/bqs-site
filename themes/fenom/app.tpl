<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">    
		<meta name="description" content="{$description}>">
		<meta name="keywords" content="{$keywords}">    
		
		{Morfy::factory()->runAction('theme_meta')}

		<link rel="shortcut icon" href="{$.config.site_url}/favicon.ico?v=1">

		<title>{$title}{if Morfy::factory()->getUriSegment(0) != ''} | {$.config.site_title}{/if}</title>

		{* Bootstrap core CSS *}

		{Morfy::factory()->runAction('getCss')}

		<link href="{$.config.site_url}/themes/{$.config.site_theme}/assets/css/main.css" rel="stylesheet">
		<link href="{$.config.site_url}/themes/{$.config.site_theme}/assets/css/hljs/zenburn.css" rel="stylesheet">

		{Morfy::factory()->runAction('theme_header')}

	</head>
	<body>
		<div class="body-wrapper clearfix">
			<div class="container container-main">
				<div class="content">
					<div class="col col-mb-hide col-hide col-dt-3">
						<div class="sidebar equal">
							{include 'sidebar.tpl'}
						</div>
					</div> <!-- .col col-mb-hide col-hide col-dt-3 -->
					<div class="col col-mb-12 col-dt-9 equal col-padding-bottom">
						{Morfy::factory()->runAction('theme_content_before')}
						
						<div class="breadcrumb">
							{if Morfy::factory()->getUriSegment(0) != ''}
								{Morfy::factory()->runAction('breadcrumb')}
							{else}
								{$description}
							{/if}
						</div>

						{block 'content'}
							content empty
						{/block}	

						{Morfy::factory()->runAction('theme_content_after')}
					</div> <!-- .col col-mb-12 col-dt-9 equal col-padding-bottom -->
				</div> <!-- .content -->
			</div> <!-- .container container-main -->
		</div> <!-- .body-wrapper clearfix -->
		<div class="footer-wrapper">
			<footer class="container">
				<div class="content">
					<div class="col col-mb-12 ta-right">
						<p class="text-muted mb0">Работает на <a href="http://morfy.org/" target="_blank">Morfy</a> и <a href="https://github.com/fenom-template/fenom" target="_blank">Fenom Template Engine</a>.</p>
					</div>
				</div>
			</footer>
		</div> <!-- .footer-wrapper -->

		<div id="footer">
			<div class="container">
			</div>
		</div>
		{* Bootstrap core JavaScript *}
		{* Placed at the end of the document so the pages load faster *}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="{$.config.site_url}/themes/{$.config.site_theme}/assets/js/jquery.matchHeight-min.js"></script>
		<script src="{$.config.site_url}/themes/{$.config.site_theme}/assets/js/highlight.pack.js"></script>
		<script src="{$.config.site_url}/themes/{$.config.site_theme}/assets/js/emojify.min.js"></script>
		<script src="{$.config.site_url}/themes/{$.config.site_theme}/assets/js/stickykit.min.js"></script>
		<script src="{$.config.site_url}/themes/{$.config.site_theme}/assets/js/main.js"></script>
		<script>
			hljs.initHighlightingOnLoad();
		</script>

		{Morfy::factory()->runAction('theme_footer')}
	</body>
</html>