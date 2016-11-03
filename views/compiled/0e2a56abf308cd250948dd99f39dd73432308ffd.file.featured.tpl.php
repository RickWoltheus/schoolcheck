<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 12:24:41
         compiled from "views\featured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1218458126d9d075ea6-63406433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e2a56abf308cd250948dd99f39dd73432308ffd' => 
    array (
      0 => 'views\\featured.tpl',
      1 => 1477650279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1218458126d9d075ea6-63406433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58126d9d078943_09716842',
  'variables' => 
  array (
    'result_album' => 0,
    'albumItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58126d9d078943_09716842')) {function content_58126d9d078943_09716842($_smarty_tpl) {?><div id="featured">
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
