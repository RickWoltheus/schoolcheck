<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 12:27:53
         compiled from "views\scheme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29263580a4138021e44-82961683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc551a9ab81be2b61ec0fa0a8bfcf57f100b793' => 
    array (
      0 => 'views\\scheme.tpl',
      1 => 1478086072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29263580a4138021e44-82961683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580a4138287c10_46355001',
  'variables' => 
  array (
    'scheme_name6' => 0,
    'scheme_name1' => 0,
    'scheme_name2' => 0,
    'scheme_name3' => 0,
    'scheme_name4' => 0,
    'scheme_name5' => 0,
    'result_scheme' => 0,
    'schemeItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580a4138287c10_46355001')) {function content_580a4138287c10_46355001($_smarty_tpl) {?><div id="content">
<table>
  <tr>
    <th><?php echo $_smarty_tpl->tpl_vars['scheme_name6']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['scheme_name1']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['scheme_name2']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['scheme_name3']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['scheme_name4']->value;?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['scheme_name5']->value;?>
</th>
    
  </tr>

	<?php  $_smarty_tpl->tpl_vars['schemeItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['schemeItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_scheme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['schemeItem']->key => $_smarty_tpl->tpl_vars['schemeItem']->value) {
$_smarty_tpl->tpl_vars['schemeItem']->_loop = true;
?>
  <tr>
    <th><img src="images/upload/<?php echo $_smarty_tpl->tpl_vars['schemeItem']->value['image'];?>
" alt="" /></th>
    <th><?php echo $_smarty_tpl->tpl_vars['schemeItem']->value['date'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['schemeItem']->value['name'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['schemeItem']->value['city'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['schemeItem']->value['street'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['schemeItem']->value['rating'];?>
</th>
  </tr>
  <?php } ?>
</table>
</div><?php }} ?>
