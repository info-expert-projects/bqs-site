<a class="item" href="{$home}">{$config.labels.home}</a>

{foreach $branch as $k => $v}
	<span class="bullet"></span>
	{if $v.current}
		<span class="item current">{$v.title}</span>
	{else}
		<a class="item" href="{$k}">{$v.title}</a>
	{/if}
{/foreach}
