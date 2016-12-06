<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:23:11
         compiled from "views/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:919968774581b727fa66996-63969804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad77a03206b670fbd775331b985abd5c190387c' => 
    array (
      0 => 'views/search.tpl',
      1 => 1478193407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '919968774581b727fa66996-63969804',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b727fa68f48_49899836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b727fa68f48_49899836')) {function content_581b727fa68f48_49899836($_smarty_tpl) {?>
<div id="search_wrapper">  
<form id="search">
<input type="text" onkeyup="showUser(this.value)" placeholder="Search for items">
<div id="txtHint"><b></b></div>
</form>
</div>

</div>

<div id="blank_space"></div>

<?php }} ?>
