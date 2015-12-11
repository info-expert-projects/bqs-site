<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">    
		<meta name="description" content="{$description}">
		<meta name="keywords" content="{$keywords}">    
		
		{Action::run('theme_meta')}

		<link rel="shortcut icon" href="/favicon.ico?v=1">

		<title>{$title}{if Url::getUriSegment(0) != ''} | {$config.site.title}{/if}</title>

		{Action::run('getCss')}

		<link href="/themes/{$config.system.theme}/assets/css/main.css" rel="stylesheet">
		<link href="/themes/{$config.system.theme}/assets/css/hljs/zenburn.css" rel="stylesheet">

		{Action::run('theme_header')}

	</head>
	<body>
		<div class="body-wrapper clearfix">
			<div class="container container-main">
				<div class="content">
					<div class="col col-mb-12 col-padding-bottom">
						{Action::run('theme_content_before')}
						
						<div class="breadcrumb">
							{if Url::getUriSegment(0) != ''}
								{Action::run('breadcrumb')}
							{else}
								{$description}
							{/if}
						</div>

						{$content}	

						{Action::run('theme_content_after')}
					</div> <!-- .col col-mb-12 col-padding-bottom -->
				</div> <!-- .content -->
			</div> <!-- .container container-main -->
		</div> <!-- .body-wrapper clearfix -->
		<div class="footer-wrapper">
			<footer class="container">
				<div class="content">
					<div class="col col-mb-12 ta-right">
						<p class="text-muted mb0">Работает на <a href="http://morfy.org/" target="_blank">Morfy</a>.</p>
					</div>
				</div>
			</footer>
		</div> <!-- .footer-wrapper -->

		<div class="mobile-nav-wrapper">
			<div class="mobile-nav">
				
			</div>
		</div>

		{* Placed at the end of the document so the pages load faster *}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="/themes/{$config.system.theme}/assets/js/jquery.matchHeight-min.js"></script>
		<script src="/themes/{$config.system.theme}/assets/js/highlight.pack.js"></script>
		<script src="/themes/{$config.system.theme}/assets/js/emojify.min.js"></script>
		<script src="/themes/{$config.system.theme}/assets/js/stickykit.min.js"></script>
		<script src="/themes/{$config.system.theme}/assets/js/jquery.mobileNav.min.js"></script>
		<script src="/themes/{$config.system.theme}/assets/js/main.js"></script>
		<script>
			hljs.initHighlightingOnLoad();
		</script>

		{Action::run('theme_footer')}
	</body>
</html>