<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 19:55:08
         compiled from "views\rss_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134375800807df35126-51001853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bc63017feaf7198d96bbb4a90915aa3104f47c4' => 
    array (
      0 => 'views\\rss_page.tpl',
      1 => 1477590868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134375800807df35126-51001853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800807e033fb1_25385452',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800807e033fb1_25385452')) {function content_5800807e033fb1_25385452($_smarty_tpl) {?>
<button id="rss_toggle">rss feed</button>
<form id="rss_feed">
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="Google">Google News</option>
</select>
<div id="rssOutput">RSS-feed will be listed here...</div>
</form>
<script type="text/javascript" src="includes/jquery.js"></script><?php }} ?>
