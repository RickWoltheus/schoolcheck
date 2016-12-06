<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:23:11
         compiled from "views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493528688581b727fa41c56-62319861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060abf0b97e0af3d1307708ca95b6c89fd7a5b4a' => 
    array (
      0 => 'views/header.tpl',
      1 => 1478193407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493528688581b727fa41c56-62319861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result_Navigation' => 0,
    'navItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b727fa5dad7_76506718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b727fa5dad7_76506718')) {function content_581b727fa5dad7_76506718($_smarty_tpl) {?>

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
