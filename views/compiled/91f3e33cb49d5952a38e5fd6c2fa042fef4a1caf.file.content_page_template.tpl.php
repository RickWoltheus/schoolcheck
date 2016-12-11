<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 20:59:20
         compiled from "views\content\content_page_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:0584b0ac237a071-96468325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91f3e33cb49d5952a38e5fd6c2fa042fef4a1caf' => 
    array (
      0 => 'views\\content\\content_page_template.tpl',
      1 => 1481313560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '0584b0ac237a071-96468325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584b0ac2443d96_92937732',
  'variables' => 
  array (
    'result_select_items' => 0,
    'oneItem' => 0,
    'cms_session' => 0,
    'Page_was' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584b0ac2443d96_92937732')) {function content_584b0ac2443d96_92937732($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_select_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['schoolName'];?>
</h1>

adres gegevens: <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['adress'];?>
 <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['adressNumber'];?>


<br><br>
<?php if (isset($_smarty_tpl->tpl_vars['cms_session']->value)) {?>
<a href="?Page=admin&cms_menu=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
&Page_was=<?php echo $_smarty_tpl->tpl_vars['Page_was']->value;?>
">edit</a>
<?php }?>
<?php } ?><?php }} ?>
