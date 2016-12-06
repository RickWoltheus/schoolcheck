<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:23:11
         compiled from "views/newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056293903581b727fafc426-75569394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1478193407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056293903581b727fafc426-75569394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog_title' => 0,
    'result' => 0,
    'oneItem' => 0,
    'row_cnt' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b727fb4e182_56319340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b727fb4e182_56319340')) {function content_581b727fb4e182_56319340($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/18701.hosts.ma-cloud.nl/httpdocs/Project/My_Band/libs/plugins/modifier.date_format.php';
?>
<div id="content">
<div id="split_content">
<div id="left_content">

	<h2><?php echo $_smarty_tpl->tpl_vars['blog_title']->value;?>
</h2>
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
	<?php } ?>

</div>

<div id="pagination">
<ul>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['row_cnt']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['row_cnt']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
	<li><a href="?page=home&pagenr=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
<?php }} ?>
</ul>
</div>
</div>


<?php }} ?>
