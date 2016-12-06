<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:23:11
         compiled from "views/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1869305666581b727fb598b0-42544555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '709ba01d9f9b4323cc342e837a813baf09be48c4' => 
    array (
      0 => 'views/welcome.tpl',
      1 => 1478193408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1869305666581b727fb598b0-42544555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result_social' => 0,
    'socialItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b727fb75f68_91483588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b727fb75f68_91483588')) {function content_581b727fb75f68_91483588($_smarty_tpl) {?><div id="right_content">
<h2>Welcome</h2>
<p>
  this the unofficial Arctic monkeys fansite. you can find information here about the band, like bandmembers, tours and the last updates. 
</p><br>
<iframe align="middle"width="854" height="480" src="https://www.youtube.com/embed/bpOSxM0rNPM" frameborder="0" allowfullscreen></iframe>
<div id="social">
<?php  $_smarty_tpl->tpl_vars['socialItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['socialItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_social']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['socialItem']->key => $_smarty_tpl->tpl_vars['socialItem']->value) {
$_smarty_tpl->tpl_vars['socialItem']->_loop = true;
?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['socialItem']->value['link'];?>
"><img src="images/icons/<?php echo $_smarty_tpl->tpl_vars['socialItem']->value['filename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['socialItem']->value['altname'];?>
" /></a>
<?php } ?>
</div>
</div>
</div>

<?php }} ?>
