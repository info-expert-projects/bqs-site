
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
					<li {if $slugChild == 'less'} class="active" {/if}>
						<a href="{$.config.site_url}/documentation/less">LESS код</a>
					</li>
					<li {if $slugChild == 'js'} class="active" {/if}>
						<a href="{$.config.site_url}/documentation/js">JS код</a>
					</li>
					<li {if $slugChild == 'php'} class="active" {/if}>
						<a href="{$.config.site_url}/documentation/php">PHP код</a>
					</li>
					<li {if $slugChild == 'other'} class="active" {/if}>
						<a href="{$.config.site_url}/documentation/other">Прочее</a>
					</li>
				</ul>
			</li>
			<li {if $slug == 'contributing'} class="active" {/if}>
				<a href="{$.config.site_url}/contributing">Contributing</a>
			</li>
		</ul>
	</nav>
</div> <!-- .sticky left-nav-block -->

