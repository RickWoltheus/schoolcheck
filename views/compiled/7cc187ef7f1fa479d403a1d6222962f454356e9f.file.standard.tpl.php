<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 18:56:32
         compiled from "views\cms\standard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118735810dc7e61a6c7-66021467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cc187ef7f1fa479d403a1d6222962f454356e9f' => 
    array (
      0 => 'views\\cms\\standard.tpl',
      1 => 1481133389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118735810dc7e61a6c7-66021467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5810dc7ea09ac1_29343658',
  'variables' => 
  array (
    'result_Navigation' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5810dc7ea09ac1_29343658')) {function content_5810dc7ea09ac1_29343658($_smarty_tpl) {?>

 <h2>standard settings</h2>
 <p>change the title of your site.</p>
  <input type="text" name="new_siteTitle" value="" placeholder="site title"><br>
  <p>change the text in your footer.</p>
  <input type="text" name="new_footertext" value="" placeholder="footer text"><br>
  <p>change the amount of items will be displayed</p>
  <input type="number" name="new_itemsPP" value="" placeholder="itemsPP"><br>
  <p>change your homepage</p>
  <select name="homepage" id="homepage">
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_Navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Page_Title'];?>
"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Page_Title'];?>
</option>
    <?php } ?>
 </select><br><br>
  <input type="submit" name="submit_standard" value="submit changes">
</form>
</div>

<?php }} ?>
