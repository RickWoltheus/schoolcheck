
<div id="content">

{foreach from=$result_songs item=songItem}
<div class="audio_item">
<h2>{$songItem.name}</h2><br>
<audio controls>
  <source src="audio/{$songItem.link}" type="audio/{$songItem.type}">
  Your browser does not support the audio tag.
</audio>
</div>
{/foreach}
</div>