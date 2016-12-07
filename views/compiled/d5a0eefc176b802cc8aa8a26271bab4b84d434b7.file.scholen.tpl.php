<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 14:49:36
         compiled from "views\scholen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260245846c0df79de77-67101556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5a0eefc176b802cc8aa8a26271bab4b84d434b7' => 
    array (
      0 => 'views\\scholen.tpl',
      1 => 1481118572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260245846c0df79de77-67101556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5846c0e00086d4_24286902',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'cms_session' => 0,
    'Page' => 0,
    'row_cnt' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846c0e00086d4_24286902')) {function content_5846c0e00086d4_24286902($_smarty_tpl) {?>
	<div id="newsarticles">
	<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<!-- what needs to be displayed -->
	<article>
		<h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['schoolName'];?>
</h3>
		<p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['adress'];?>
</p>
	</article>
  
  <!-- add to favorites -->
  <form action='' method="post">
      <input type="hidden" name="id_favorite" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
"/>
      <input type="submit" name="submit_favorite" value="favorite">
  </form>
  
  <!-- cms edit and delete buttons -->
	<?php if (isset($_smarty_tpl->tpl_vars['cms_session']->value)) {?>
  <a href="?Page=admin&cms_menu=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
&Page_was=<?php echo $_smarty_tpl->tpl_vars['Page']->value;?>
">edit</a>
	<form action='' method="post">
	    <input type="hidden" name="id_delete" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
"/>
	    <input type="submit" name="submit_delete" value="Delete">
	</form>
	<?php }?>
	<?php } ?>

</div>

<!-- pagination -->
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
