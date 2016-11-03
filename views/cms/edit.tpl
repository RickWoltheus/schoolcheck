{foreach from=$result item=oneItem}
<div class="newsarticles_edit_item">
  <h3>{$oneItem.title}</h3>
  <p>{$oneItem.content}</p>
  <br><img src='images/upload/{$oneItem.image}' alt="{$oneItem.title}">
<h3>{$oneItem.date_created|date_format:"%A, %B %e, %Y"}</h3>

<form action='' method="post">
    <input type="hidden" name="id_delete" value="{$oneItem.id}">
    <input type="submit" name="submit_delete" value="Delete">
</form>

</div>
<form class="" action="" method="post" enctype="multipart/form-data">
<input type="text" name="new_newsarticleTitle" value="" placeholder="newsarticle title"><br>
<input type="text" name="new_content" value="" placeholder="new content"><br>
<input type='file' name='file_upload' id='newsarticle_fileToUpload'><br>
<input type="submit" name="submit_new_newsarticle" value="submit changes">
</form>
{/foreach}