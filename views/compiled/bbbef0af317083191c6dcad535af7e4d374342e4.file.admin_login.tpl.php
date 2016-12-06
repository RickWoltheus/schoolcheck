<?php /* Smarty version Smarty-3.1.18, created on 2016-11-07 09:31:07
         compiled from "views/cms/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103466415158203bcb5aa607-23779950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbbef0af317083191c6dcad535af7e4d374342e4' => 
    array (
      0 => 'views/cms/admin_login.tpl',
      1 => 1478193408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103466415158203bcb5aa607-23779950',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58203bcb61e4b4_96152815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58203bcb61e4b4_96152815')) {function content_58203bcb61e4b4_96152815($_smarty_tpl) {?><form class="login" action="" method="post">
  <h2>this page is for owners only</h2>
  <table>
  <tr>
    <td>
  <input type="text" name="username" placeholder="username">
</td>
</tr>
<tr>
  <td>
  <input type="password" name="password" placeholder="password">
  </td>
<tr>
  <td>
  <input type="submit" name="submit_login" value="submit">
  </td>
</tr>
</table>
</form><?php }} ?>
