
	<div id="newsarticles">
	{foreach from=$result item=oneItem}

	<article>
		<h3>{$oneItem.schoolName}</h3>
		<p>{$oneItem.adress}</p>
	</article>
  
  
	{if isset($cms_session)}
  <a href="?Page=admin&cms_menu=edit&id={$oneItem.id}">edit</a>
	<form action='' method="post">
	    <input type="hidden" name="id_delete" value="{$oneItem.id}" onclick=changeHtml(this) />
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


