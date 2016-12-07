
	<div id="newsarticles">
	{foreach from=$result item=oneItem}
<!-- what needs to be displayed -->
	<article>
		<h3>{$oneItem.schoolName}</h3>
		<p>{$oneItem.adress}</p>
	</article>
  
  <!-- add to favorites -->
  <form action='' method="post">
      <input type="hidden" name="id_favorite" value="{$oneItem.id}"/>
      <input type="submit" name="submit_favorite" value="favorite">
  </form>
  
  <!-- cms edit and delete buttons -->
	{if isset($cms_session)}
  <a href="?Page=admin&cms_menu=edit&id={$oneItem.id}&Page_was={$Page}">edit</a>
	<form action='' method="post">
	    <input type="hidden" name="id_delete" value="{$oneItem.id}"/>
	    <input type="submit" name="submit_delete" value="Delete">
	</form>
	{/if}
	{/foreach}

</div>

<!-- pagination -->
<div id="pagination">
<ul>
{for  $foo=1 to $row_cnt}
	<li><a href="?Page={$Page}&pagenr={$foo}">{$foo}</a></li>
{/for}
</ul>
</div>
</div>


