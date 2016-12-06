<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:23:11
         compiled from "views/featured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:777116164581b727fad1433-82465975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b800ebddbdbc394193c24cbf02ad4cb71b556db6' => 
    array (
      0 => 'views/featured.tpl',
      1 => 1478193407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777116164581b727fad1433-82465975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result_album' => 0,
    'albumItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b727faf4043_96219976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b727faf4043_96219976')) {function content_581b727faf4043_96219976($_smarty_tpl) {?><div id="featured">
  <?php  $_smarty_tpl->tpl_vars['albumItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['albumItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['albumItem']->key => $_smarty_tpl->tpl_vars['albumItem']->value) {
$_smarty_tpl->tpl_vars['albumItem']->_loop = true;
?>
  <div class="album_wrapper">
    <div class="text_wrapper">
      <p><?php echo $_smarty_tpl->tpl_vars['albumItem']->value['creators'];?>
</p>
		<p><?php echo $_smarty_tpl->tpl_vars['albumItem']->value['name'];?>
</p>
		<p><?php echo $_smarty_tpl->tpl_vars['albumItem']->value['date'];?>
</p>
    </div>
		<img src='images/album_covers/<?php echo $_smarty_tpl->tpl_vars['albumItem']->value['image'];?>
' alt="album" />
  </div>
  <?php } ?>
</div>
</div><?php }} ?>
