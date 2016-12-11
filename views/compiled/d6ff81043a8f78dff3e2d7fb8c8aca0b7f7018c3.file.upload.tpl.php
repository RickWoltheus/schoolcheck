<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 19:58:04
         compiled from "views\cms\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064858170479a69983-54713818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ff81043a8f78dff3e2d7fb8c8aca0b7f7018c3' => 
    array (
      0 => 'views\\cms\\upload.tpl',
      1 => 1481309882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064858170479a69983-54713818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58170479aaac90_59669445',
  'variables' => 
  array (
    'result_keys' => 0,
    'oneItem' => 0,
    'itemKey' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58170479aaac90_59669445')) {function content_58170479aaac90_59669445($_smarty_tpl) {?><form class="" action="index.html" method="post">
 <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_keys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
 <?php if ($_smarty_tpl->tpl_vars['itemKey']->value!='id') {?>
  <p><?php echo $_smarty_tpl->tpl_vars['itemKey']->value;?>
</p>
  <input type='text' name=<?php echo $_smarty_tpl->tpl_vars['itemKey']->value;?>
 placeholder=<?php echo $_smarty_tpl->tpl_vars['itemKey']->value;?>
>
  <?php }?>
 <?php } ?>
 <?php } ?>
 <input type="submit" name="submit_what_to_upload" value="submit">
 </form>
</div>

<?php }} ?>
