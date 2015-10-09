
    <div id="newsArticles">
{include file="form.tpl"}


<section>
{foreach from=$data item=newsitem}


		<h1>{$newsitem.title}</h1>
		<p>{$newsitem.date_created}</p><br>
		<content>{$newsitem.content}</content><br>
    {if $newsitem.image}
        <img src="images/{$newsitem.image}">
    {/if}

{/foreach}
</section>
    </div>
    {include file="pagination.tpl"}