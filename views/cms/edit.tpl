<div class="cms_form">
<form class="" action="index.html" method="post">
  {foreach from=$result_select_items item=oneItem}
  {foreach from=$oneItem item=value key=itemKey}
  <p>{$itemKey}</p>
  <input type="text" name="{$itemKey}" value="{$value}">
  {/foreach}
  {/foreach}
  
<input type="submit" name="edit message" value="submit">
</form>
</div>