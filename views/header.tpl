

<!-- navigation -->
<div id="top_menu">	
	<div id="navigation_wrapper">
<ul>
	{foreach from=$result_Navigation item=navItem}
		<li><a href="?Page={$navItem.Page_Link}">{$navItem.Page_Title}</a></li>
  {/foreach}
</ul>
  </div>