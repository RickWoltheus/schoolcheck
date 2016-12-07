
  <h2>{$result_select_items.schoolName}</h2>
<form action="" method="post">
  
  {foreach from=$result_select_items item=oneItem}
  {foreach from=$oneItem item=value key=itemKey}
  <p>{$itemKey}</p>
  
  <input type="text" name="{$itemKey}" value="{$value}">
  {/foreach}
  {/foreach}
  
<input type="submit" name="edit_message" value="submit">
</form>
</div>