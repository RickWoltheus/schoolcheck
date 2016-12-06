<?php /* Smarty version Smarty-3.1.18, created on 2016-12-05 17:28:15
         compiled from "views\items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227758452a682351c5-16245457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df14b632df792f767c2a065bfd4641cf0016b145' => 
    array (
      0 => 'views\\items.tpl',
      1 => 1480955294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227758452a682351c5-16245457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58452a68345604_17908263',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'cms_session' => 0,
    'row_cnt' => 0,
    'Page' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58452a68345604_17908263')) {function content_58452a68345604_17908263($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp64\\www\\school\\My_Band\\libs\\plugins\\modifier.date_format.php';
?>
	<div id="newsarticles">
	<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
	<article>
		<h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h3>
		<p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>
		<br><img src='images/upload/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
' alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
">
	<small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%A, %B %e, %Y");?>
</small>
	</article>
	<?php if (isset($_smarty_tpl->tpl_vars['cms_session']->value)) {?>
	<form action='' method="post">
	    <input type="hidden" name="id_delete" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">
	    <input type="submit" name="submit_delete" value="Delete">
	</form>
	<?php }?>
	<?php } ?>

</div>

<div id="pagination">
<ul>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['row_cnt']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['row_cnt']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
	<li><a href="?Page=<?php echo $_smarty_tpl->tpl_vars['Page']->value;?>
&pagenr=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
<?php }} ?>
</ul>
</div>
</div>


<?php }} ?>
