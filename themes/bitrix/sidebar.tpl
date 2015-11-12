<a href="/" class="logo">Bitrix Quick Start</a>

<div class="sticky left-nav-block">
	<nav>
		<ul class="left-nav">
			{set $slug = Url::getUriSegment(0)}
			{set $slugChild = Url::getUriSegment(1)}
			{set $home = Url::getBase()}
			<li {if $slug == ''} class="active" {/if}>
				<a href="{$home}">Главная</a>
			</li>
			{* <li {if $slug == 'blog'} class="active" {/if}>
				<a href="{$home}/blog">Блог</a>
			</li> *}
			<li {if $slug == 'documentation'} class="active" {/if}>
				<a href="{$home}/documentation">Документация</a>
				<ul>
					<li {if $slugChild == 'structure'} class="active" {/if}>
						<a href="{$home}/documentation/structure">Структура</a>
					</li>
					<li {if $slugChild == 'less'} class="active" {/if}>
						<a href="{$home}/documentation/less">LESS</a>
					</li>

				</ul>
			</li>

			<li {if $slug == 'code'} class="active" {/if}>
				<a href="{$home}/code">Организация кода</a>
				<ul>
					<li {if $slugChild == 'php'} class="active" {/if}>
						<a href="{$home}/code/php">PHP-код</a>
					</li>
					<li {if $slugChild == 'html'} class="active" {/if}>
						<a href="{$home}/code/html">HTML код</a>
					</li>
					<li {if $slugChild == 'js'} class="active" {/if}>
						<a href="{$home}/code/js">JS-код</a>
					</li>
					<li {if $slugChild == 'css'} class="active" {/if}>
						<a href="{$home}/code/css">LESS и CSS код</a>
					</li>
					<li {if $slugChild == 'folders'} class="active" {/if}>
						<a href="{$home}/code/folders">Файлы и папки</a>
					</li>
				</ul>
			</li>
			
			<li {if $slug == 'git'} class="active" {/if}>
				<a href="/git">Git</a>
			</li>

			<li {if $slug == 'blame'} class="active" {/if}>
				<a href="/blame">Ответственность</a>
			</li>

			<li {if $slug == 'contributing'} class="active" {/if}>
				<a href="{$home}/contributing">Contributing</a>
			</li>
		</ul>
	</nav>
</div> <!-- .sticky left-nav-block -->

