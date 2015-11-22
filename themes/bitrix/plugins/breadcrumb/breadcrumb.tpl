{*
/* Breadcrumb CSS:*/
.bullet {
	display: inline-block;	
	width: 1em;
	height: 1em;
	line-height: 1;
	text-align: center;
}
.bullet:after {
	content: '\2022';
	position: relative;
	top: 1px;
}
.breadcrumb {
	font-size: 14px;
	line-height: 30px;
	min-height: 30px;
	margin-bottom: 20px;
} 
*}
<div xmlns:v="http://rdf.data-vocabulary.org/#">
	
	<span typeof="v:Breadcrumb">
		<a class="item" href="{$home}" rel="v:url" property="v:title">{$config.labels.home}</a>
	</span>
	
	{foreach $branch as $k => $v}
		<span class="bullet"></span>
		{if $v.current}
			<span class="item current">{$v.title}</span>
		{else}
			<span typeof="v:Breadcrumb">
				<a class="item" href="{$k}" rel="v:url" property="v:title">{$v.title}</a>
			</span>
		{/if}
	{/foreach}
</div>
