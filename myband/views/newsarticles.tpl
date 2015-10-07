<div id="content">
{include file="form.tpl"}
{include file="pagination.tpl"}

<section>
{foreach from=$data item=newsitem}


		<h1>{$newsitem.title}</h1>
		<p>{$newsitem.date_created}</p>
		<content>{$newsitem.content}</content>

{/foreach}
</section>