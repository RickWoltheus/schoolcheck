<form class="cms_form" action="" method="post">
 <h2>standard settings</h2>
 <p>change the title of your site.</p>
  <input type="text" name="new_siteTitle" value="" placeholder="site title"><br>
  <p>change the text in your footer.</p>
  <input type="text" name="new_footertext" value="" placeholder="footer text"><br>
  <p>change the amount of items will be displayed</p>
  <input type="number" name="new_itemsPP" value="" placeholder="itemsPP"><br>
  <p>change your homepage</p>
  <select name="homepage" id="homepage">
    {foreach from=$result_Navigation item=oneItem}
    <option value="{$oneItem.Page_Title}">{$oneItem.Page_Title}</option>
    {/foreach}
 </select>
  <input type="submit" name="submit_standard" value="submit changes">
</form>
</div>
