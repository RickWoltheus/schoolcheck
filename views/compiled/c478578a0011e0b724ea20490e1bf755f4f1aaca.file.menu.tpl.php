<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 17:27:56
         compiled from "views\cms\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3223058497915e818a7-70532990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c478578a0011e0b724ea20490e1bf755f4f1aaca' => 
    array (
      0 => 'views\\cms\\menu.tpl',
      1 => 1481300874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3223058497915e818a7-70532990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584979164186b9_79661978',
  'variables' => 
  array (
    'Page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584979164186b9_79661978')) {function content_584979164186b9_79661978($_smarty_tpl) {?><div class="menucms">
<ul>
  <a href="?Page=<?php echo $_smarty_tpl->tpl_vars['Page']->value;?>
&cms_menu=standard">standard</a>
  <a href="?Page=<?php echo $_smarty_tpl->tpl_vars['Page']->value;?>
&cms_menu=add&Page_was=<?php echo $_smarty_tpl->tpl_vars['Page']->value;?>
">add</a>
  <button id="formchange" type="button" name="button" onclick="show()" >Show</button>
</ul>
</div>
<div id="menucmschange"><?php }} ?>
