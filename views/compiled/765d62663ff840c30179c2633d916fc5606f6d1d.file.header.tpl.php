<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 13:30:58
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2341557f776e9585761-98270802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1477654254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2341557f776e9585761-98270802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f776e95c3769_86718702',
  'variables' => 
  array (
    'result_Navigation' => 0,
    'navItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f776e95c3769_86718702')) {function content_57f776e95c3769_86718702($_smarty_tpl) {?>

<!-- navigation -->
<div id="top_menu">
	
	<div id="logo_wrapper">
	<img src="images/logo.png" alt="logo" />
	</div>
	
	<div id="navigation_wrapper">
<ul>
	<?php  $_smarty_tpl->tpl_vars['navItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_Navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navItem']->key => $_smarty_tpl->tpl_vars['navItem']->value) {
$_smarty_tpl->tpl_vars['navItem']->_loop = true;
?>
  
		<li><a href="?Page=<?php echo $_smarty_tpl->tpl_vars['navItem']->value['Page_Link'];?>
"><?php echo $_smarty_tpl->tpl_vars['navItem']->value['Page_Title'];?>
</a></li>
    
  <?php } ?>
    
</ul>
  </div><?php }} ?>
