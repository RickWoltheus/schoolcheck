
<div id="content">
<div id="split_content">
<div id="left_content">

	<h2>{$blog_title}</h2>
	<div id="newsarticles">
	{foreach from=$result item=oneItem}
	<article>
		<h3>{$oneItem.title}</h3>
		<p>{$oneItem.content}</p>
		<br><img src='images/upload/{$oneItem.image}' alt="{$oneItem.title}">
	<small>{$oneItem.date_created|date_format:"%A, %B %e, %Y"}</small>
	</article>
	{/foreach}

</div>

<div id="pagination">
<ul>
{for  $foo=1 to $row_cnt}
	<li><a href="?page=home&pagenr={$foo}">{$foo}</a></li>
{/for}
</ul>
</div>
</div>


