<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:23:11
         compiled from "views/rss_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:903679373581b727fa70b37-08830925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ccc69029ea1fd55721097e95344004570efa46c' => 
    array (
      0 => 'views/rss_page.tpl',
      1 => 1478193407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '903679373581b727fa70b37-08830925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b727fa73005_83447317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b727fa73005_83447317')) {function content_581b727fa73005_83447317($_smarty_tpl) {?>
<button id="rss_toggle">rss feed</button>
<form id="rss_feed">
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="Google">Google News</option>
</select>
<div id="rssOutput">RSS-feed will be listed here...</div>
</form>
<script type="text/javascript" src="includes/jquery.js"></script><?php }} ?>
