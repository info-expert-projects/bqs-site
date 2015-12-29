<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">    
		<meta name="description" content="{$description}">
  
		
		{Action::run('theme_meta')}

		<title>{$title}</title>
		
		{insert 'favicons.tpl'}

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300&amp;text=Bitrix+Quick+Start" rel="stylesheet">
		<style>
			html, body {
				height: 100%;
			}
			body {
				height: auto;
				min-height: 100%;
				position: relative;
				overflow: hidden;
				margin: 0;
				padding: 0;
				background: #2b1f58 url('/storage/images/bg.jpg') no-repeat 50% 50%;
				-webkit-background-size: cover;
				background-size: cover;
				color: #fff;							
			}
			.logo {
				position: absolute;
				display: block;
				top: 50%;
				left: 50%;
				width: 322px;
				height: 278px;
				margin: -180px 0 0 -161px;
				background: url('/storage/images/logo.png') no-repeat 50% 50%;
				text-align: center;
			}
			.logo a {
				color: #fff;
				text-decoration: none;
				font: 300 30px/38px 'Open Sans', Arial, sans-serif;
				margin-top: 200px;
				display: inline-block;
				border-bottom: solid 1px rgba(255,255,255,.6);
				text-shadow: 0 0 20px rgba(0,0,0,.2), 0 2px 5px rgba(0,0,0,.5), 0 2px 10px rgba(0,0,0,.4);
				-webkit-transition: all ease .3s;
				-o-transition: all ease .3s;
				transition: all ease .3s;
			}
			.logo a:hover {
				border-bottom-color: #fff;
			}

		</style>
	</head>
	<body>
		<div class="logo">
			<a href="/documentation">Bitrix Quick Start</a>
		</div>
	</body>
</html>
