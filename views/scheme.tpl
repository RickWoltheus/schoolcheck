<div id="content">
<table>
  <tr>
    <th>{$scheme_name6}</th>
    <th>{$scheme_name1}</th>
    <th>{$scheme_name2}</th>
    <th>{$scheme_name3}</th>
    <th>{$scheme_name4}</th>
    <th>{$scheme_name5}</th>
    
  </tr>

	{foreach from=$result_scheme item=schemeItem}
  <tr>
    <th><img src="images/upload/{$schemeItem.image}" alt="" /></th>
    <th>{$schemeItem.date}</th>
    <th>{$schemeItem.name}</th>
    <th>{$schemeItem.city}</th>
    <th>{$schemeItem.street}</th>
    <th>{$schemeItem.rating}</th>
  </tr>
  {/foreach}
</table>
</div>