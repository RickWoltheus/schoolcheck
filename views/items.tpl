
	<div id="newsarticles">
	{foreach from=$result item=oneItem}
	<article>
		<h3>{$oneItem.title}</h3>
		<p>{$oneItem.content}</p>
		<br><img src='images/upload/{$oneItem.image}' alt="{$oneItem.title}">
	<small>{$oneItem.date_created|date_format:"%A, %B %e, %Y"}</small>
	</article>
	{if isset($cms_session)}
	<form action='' method="post">
	    <input type="hidden" name="id_delete" value="{$oneItem.id}">
	    <input type="submit" name="submit_delete" value="Delete">
	</form>
	{/if}
	{/foreach}

</div>

<div id="pagination">
<ul>
{for  $foo=1 to $row_cnt}
	<li><a href="?Page={$Page}&pagenr={$foo}">{$foo}</a></li>
{/for}
</ul>
</div>
</div>


