<h1>Your search resulted in the following:</h1>
<section>
    {foreach from=$data item=newsitem}
        <article>

            <p>{$newsitem.id} {$newsitem.title}</p>
            <content>{$newsitem.content}</content>
        </article>
    {/foreach}
</section>
<br>
<a href="index.php?page=news">Press here to go back.</a>