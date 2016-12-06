{foreach from=$result item=oneItem}
<div class="newsarticles_edit_item">
  <h3>{$oneItem.title}</h3>
  <p>{$oneItem.content}</p>
  <br><img src='images/upload/{$oneItem.image}' alt="{$oneItem.title}">
<small>{$oneItem.date_created|date_format:"%A, %B %e, %Y"}</small>

<form action='' method="post">
    <input type="hidden" name="id_delete" value="{$oneItem.id}">
    <input type="submit" name="submit_delete" value="Delete">
</form>

</div>
{/foreach}