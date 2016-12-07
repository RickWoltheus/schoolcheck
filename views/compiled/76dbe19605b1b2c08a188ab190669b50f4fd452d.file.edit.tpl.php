<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 10:29:06
         compiled from "views\cms\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:623658186de92bf4b7-73421016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76dbe19605b1b2c08a188ab190669b50f4fd452d' => 
    array (
      0 => 'views\\cms\\edit.tpl',
      1 => 1481102945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '623658186de92bf4b7-73421016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58186de972fbc7_87181093',
  'variables' => 
  array (
    'result_select_items' => 0,
    'oneItem' => 0,
    'itemKey' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58186de972fbc7_87181093')) {function content_58186de972fbc7_87181093($_smarty_tpl) {?><div class="cms_form">
<form class="" action="index.html" method="post">
  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_select_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['itemKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneItem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['itemKey']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
  <p><?php echo $_smarty_tpl->tpl_vars['itemKey']->value;?>
</p>
  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['itemKey']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
  <?php } ?>
  <?php } ?>
  
<input type="submit" name="edit message" value="submit">
</form>
</div><?php }} ?>
