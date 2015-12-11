<!DOCTYPE html>
<html lang="ru">
	<head prefix="og: http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">    
		<meta name="description" content="{$description}">
		<meta name="keywords" content="{$keywords}">    
		
		{Action::run('theme_meta')}

		<link rel="shortcut icon" href="/favicon.ico?v=1">

		<title>{$title}{if Url::getUriSegment(0) != ''} | {$config.site.title}{/if}</title>

		{Action::run('getCss')}
	    {* ! https://github.com/bdadam/OptimizedWebfontLoading *} 
		<script>
			{ignore} 
			function loadFont(t,e,n,o){function a(){if(!window.FontFace)return!1;var t=new FontFace("t",'url("data:application/font-woff2,") format("woff2")',{}),e=t.load();try{e.then(null,function(){})}catch(n){}return"loading"===t.status}var r=navigator.userAgent,s=!window.addEventListener||r.match(/(Android (2|3|4.0|4.1|4.2|4.3))|(Opera (Mini|Mobi))/)&&!r.match(/Chrome/);if(!s){var i={};try{i=localStorage||{}}catch(c){}var d="x-font-"+t,l=d+"url",u=d+"css",f=i[l],h=i[u],p=document.createElement("style");if(p.rel="stylesheet",document.head.appendChild(p),!h||f!==e&&f!==n){var w=n&&a()?n:e,m=new XMLHttpRequest;m.open("GET",w),m.onload=function(){m.status>=200&&m.status<400&&(i[l]=w,i[u]=m.responseText,o||(p.textContent=m.responseText))},m.send()}else p.textContent=h}} 
			{/ignore}
		loadFont('OpenSans', '/themes/{$config.system.theme}/assets/fonts/opensans.css', '/themes/{$config.system.theme}/assets/fonts/opensans-woff2.css');</script>

		{Action::run('asset_folder', [['/assets/css/']])}
		{Action::run('asset_file', ['/assets/css/hljs/zenburn.css'])}

		{* <link href="/themes/{$config.system.theme}/assets/css/main.css" rel="stylesheet"> *}
		{* <link href="/themes/{$config.system.theme}/assets/css/hljs/zenburn.css" rel="stylesheet"> *}

		{Action::run('theme_header')}

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
						{Action::run('theme_content_before')}
						
						<div class="breadcrumb">
							{if Url::getUriSegment(0) != ''}
								{Action::run('breadcrumb')}
							{else}
								{$description}
							{/if}
						</div>

						{block 'content'}
							content empty
						{/block}	

						{Action::run('theme_content_after')}
					</div> <!-- .col col-mb-12 col-dt-9 equal col-padding-bottom -->
				</div> <!-- .content -->
			</div> <!-- .container container-main -->
		</div> <!-- .body-wrapper clearfix -->
		<div class="footer-wrapper">
			<footer class="container">
				<div class="content">
					<div class="col col-mb-12 ta-right">
						<p class="text-muted mb0">Работает на <a href="http://morfy.org/" target="_blank">Morfy</a></p>
					</div>
				</div>
			</footer>
		</div> <!-- .footer-wrapper -->

		<div class="mobile-nav-wrapper">
			<div class="mobile-nav">
				
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		{Action::run('asset_folder', [['/assets/js/'], ['main']])}
		
		{* <script src="/themes/{$config.system.theme}/assets/js/jquery.matchHeight-min.js"></script> *}
		{* <script src="/themes/{$config.system.theme}/assets/js/highlight.pack.js"></script> *}
		{* <script src="/themes/{$config.system.theme}/assets/js/emojify.min.js"></script> *}
		{* <script src="/themes/{$config.system.theme}/assets/js/stickykit.min.js"></script> *}
		{* <script src="/themes/{$config.system.theme}/assets/js/jquery.mobileNav.min.js"></script> *}
		{* <script src="/themes/{$config.system.theme}/assets/js/jquery.formstyler.min.js"></script> *}
		{* <script src="/themes/{$config.system.theme}/assets/js/main.js"></script> *}
		
		{Action::run('asset_file', ['/assets/js/main.js'])}
		<script>
			hljs.initHighlightingOnLoad();
		</script>

		{Action::run('theme_footer')}
	</body>
</html>