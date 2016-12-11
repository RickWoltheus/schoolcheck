{foreach from=$result_select_items item=oneItem}

<h1>{$oneItem.schoolName}</h1>

adres gegevens: {$oneItem.adress} {$oneItem.adressNumber}

<br><br>
{if isset($cms_session)}
<a href="?Page=admin&cms_menu=edit&id={$oneItem.id}&Page_was={$Page_was}">edit</a>
{/if}
{/foreach}