<div id="featured">
  {foreach from=$result_album item=albumItem}
  <div class="album_wrapper">
    <div class="text_wrapper">
      <p>{$albumItem.creators}</p>
		<p>{$albumItem.name}</p>
		<p>{$albumItem.date}</p>
    </div>
		<img src='images/album_covers/{$albumItem.image}' alt="album" />
  </div>
  {/foreach}
</div>
</div>