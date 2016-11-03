<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 16:27:57
         compiled from "views\songs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19535581b4ea79f7af1-78822869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3505fb767d64dc5507b5efc4083cf85592df4b43' => 
    array (
      0 => 'views\\songs.tpl',
      1 => 1478186875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19535581b4ea79f7af1-78822869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b4ea7a3a535_72087310',
  'variables' => 
  array (
    'result_songs' => 0,
    'songItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b4ea7a3a535_72087310')) {function content_581b4ea7a3a535_72087310($_smarty_tpl) {?>
<div id="content">

<?php  $_smarty_tpl->tpl_vars['songItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['songItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_songs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['songItem']->key => $_smarty_tpl->tpl_vars['songItem']->value) {
$_smarty_tpl->tpl_vars['songItem']->_loop = true;
?>
<div class="audio_item">
<h2><?php echo $_smarty_tpl->tpl_vars['songItem']->value['name'];?>
</h2><br>
<audio controls>
  <source src="audio/<?php echo $_smarty_tpl->tpl_vars['songItem']->value['link'];?>
" type="audio/<?php echo $_smarty_tpl->tpl_vars['songItem']->value['type'];?>
">
  Your browser does not support the audio tag.
</audio>
</div>
<?php } ?>
</div><?php }} ?>
