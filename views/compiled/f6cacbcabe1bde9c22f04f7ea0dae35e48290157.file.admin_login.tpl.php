<?php /* Smarty version Smarty-3.1.18, created on 2016-12-02 13:42:07
         compiled from "views\cms\admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26355811ea979f3100-98963361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6cacbcabe1bde9c22f04f7ea0dae35e48290157' => 
    array (
      0 => 'views\\cms\\admin_login.tpl',
      1 => 1480677034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26355811ea979f3100-98963361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811ea979f4b15_99218744',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811ea979f4b15_99218744')) {function content_5811ea979f4b15_99218744($_smarty_tpl) {?><form class="login" action="" method="post">
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
