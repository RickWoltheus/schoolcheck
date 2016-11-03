<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 16:51:18
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222957fb85e774a3f7-65351403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1478188276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222957fb85e774a3f7-65351403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fb85e7a320c6_32937069',
  'variables' => 
  array (
    'result_about' => 0,
    'aboutItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb85e7a320c6_32937069')) {function content_57fb85e7a320c6_32937069($_smarty_tpl) {?>
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
