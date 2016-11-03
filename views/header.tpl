

<!-- navigation -->
<div id="top_menu">
	
	<div id="logo_wrapper">
	<img src="images/logo.png" alt="logo" />
	</div>
	
	<div id="navigation_wrapper">
<ul>
	{foreach from=$result_Navigation item=navItem}
  
		<li><a href="?Page={$navItem.Page_Link}">{$navItem.Page_Title}</a></li>
    
  {/foreach}
    
</ul>
  </div>