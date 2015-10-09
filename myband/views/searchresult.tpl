<h1>Your search resulted in the following:</h1>
<section>
    {foreach from=$data item=newsitem}
        <article>

            <p>{$newsitem.title}</p>
            <content>{$newsitem.content}</content>
        </article>
    {/foreach}
</section>
<br>
<a href="index.php?page=news">Click here to go back.</a>