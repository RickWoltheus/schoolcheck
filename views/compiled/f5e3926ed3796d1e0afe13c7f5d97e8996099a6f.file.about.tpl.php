<?php /* Smarty version Smarty-3.1.18, created on 2016-11-04 08:32:56
         compiled from "views/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977151956581c39a8d3df79-19113809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e3926ed3796d1e0afe13c7f5d97e8996099a6f' => 
    array (
      0 => 'views/about.tpl',
      1 => 1478193407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1977151956581c39a8d3df79-19113809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result_about' => 0,
    'aboutItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581c39a8dfb2d1_04593389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581c39a8dfb2d1_04593389')) {function content_581c39a8dfb2d1_04593389($_smarty_tpl) {?>
<div id="content">
<?php  $_smarty_tpl->tpl_vars['aboutItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aboutItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_about']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aboutItem']->key => $_smarty_tpl->tpl_vars['aboutItem']->value) {
$_smarty_tpl->tpl_vars['aboutItem']->_loop = true;
?>
<h2><?php echo $_smarty_tpl->tpl_vars['aboutItem']->value['title'];?>
</h2>
<p><?php echo $_smarty_tpl->tpl_vars['aboutItem']->value['text'];?>
</p>

<?php } ?>
</div>
<?php }} ?>
