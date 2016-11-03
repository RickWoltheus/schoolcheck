<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 15:45:58
         compiled from "views\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:700258187e9e21f952-73406566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6232d4441583201596663eabe8b09dcfd588e44d' => 
    array (
      0 => 'views\\welcome.tpl',
      1 => 1478184356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700258187e9e21f952-73406566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58187e9e267282_09113042',
  'variables' => 
  array (
    'result_social' => 0,
    'socialItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58187e9e267282_09113042')) {function content_58187e9e267282_09113042($_smarty_tpl) {?><div id="right_content">
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
