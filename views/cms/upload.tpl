<form class="" action="index.html" method="post">
 {foreach from=$result_keys item=oneItem}
 {foreach from=$oneItem item=value key=itemKey}
 {if $itemKey neq 'id'}
  <p>{$itemKey}</p>
  <input type='text' name={$itemKey} placeholder={$itemKey}>
  {/if}
 {/foreach}
 {/foreach}
 <input type="submit" name="submit_what_to_upload" value="submit">
 </form>
</div>

