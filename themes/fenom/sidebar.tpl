<a href="/" class="logo">Bitrix Quick Start</a>

<div class="sticky left-nav-block">
	<nav>
		<ul class="left-nav">
			{set $slug = Morfy::factory()->getUriSegment(0)}
			{set $slugChild = Morfy::factory()->getUriSegment(1)}
			<li {if $slug == ''} class="active" {/if}>
				<a href="{$.config.site_url}">Главная</a>
			</li>
			{* <li {if $slug == 'blog'} class="active" {/if}>
				<a href="{$.config.site_url}/blog">Блог</a>
			</li> *}
			<li {if $slug == 'documentation'} class="active" {/if}>
				<a href="{$.config.site_url}/documentation">Документация</a>
				<ul>
					<li {if $slugChild == 'overview'} class="active" {/if}>
						<a href="{$.config.site_url}/documentation/overview">Обзор</a>
					</li>
					<li {if $slugChild == 'structure'} class="active" {/if}>
						<a href="{$.config.site_url}/documentation/structure">Структура</a>
					</li>
				</ul>
			</li>

			<li {if $slug == 'code'} class="active" {/if}>
				<a href="{$.config.site_url}/code">Организация кода</a>
				<ul>
					<li {if $slugChild == 'php'} class="active" {/if}>
						<a href="{$.config.site_url}/code/php">PHP-код</a>
					</li>
					<li {if $slugChild == 'js'} class="active" {/if}>
						<a href="{$.config.site_url}/code/js">JS-код</a>
					</li>
					<li {if $slugChild == 'css'} class="active" {/if}>
						<a href="{$.config.site_url}/code/css">CSS-код</a>
					</li>
					<li {if $slugChild == 'folders'} class="active" {/if}>
						<a href="{$.config.site_url}/code/folders">Файлы и папки</a>
					</li>
				</ul>
			</li>
			
			<li {if $slug == 'git'} class="active" {/if}>
				<a href="/git">Git</a>
			</li>
			
			<li {if $slug == 'frontend'} class="active" {/if}>
				<a href="/frontend">Вёрстка собственных проектов</a>
			</li>

			<li {if $slug == 'blame'} class="active" {/if}>
				<a href="/blame">Ответственность</a>
			</li>

			<li {if $slug == 'contributing'} class="active" {/if}>
				<a href="{$.config.site_url}/contributing">Contributing</a>
			</li>
		</ul>
	</nav>
</div> <!-- .sticky left-nav-block -->

