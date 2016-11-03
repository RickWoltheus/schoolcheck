
<div id="content">
{foreach from=$result_about item=aboutItem}
<h2>{$aboutItem.title}</h2>
<p>{$aboutItem.text}</p>

{/foreach}
</div>
