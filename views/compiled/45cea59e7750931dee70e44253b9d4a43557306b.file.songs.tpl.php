<?php /* Smarty version Smarty-3.1.18, created on 2016-11-04 08:33:52
         compiled from "views/songs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062415334581c39e02e5273-30345886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45cea59e7750931dee70e44253b9d4a43557306b' => 
    array (
      0 => 'views/songs.tpl',
      1 => 1478193407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062415334581c39e02e5273-30345886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result_songs' => 0,
    'songItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581c39e034a226_65197545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581c39e034a226_65197545')) {function content_581c39e034a226_65197545($_smarty_tpl) {?>
<div id="content">

<?php  $_smarty_tpl->tpl_vars['songItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['songItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_songs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['songItem']->key => $_smarty_tpl->tpl_vars['songItem']->value) {
$_smarty_tpl->tpl_vars['songItem']->_loop = true;
?>
<div class="audio_item">
<h2><?php echo $_smarty_tpl->tpl_vars['songItem']->value['name'];?>
</h2><br>
<p>
  <?php echo $_smarty_tpl->tpl_vars['songItem']->value['info'];?>

</p>
<audio controls>
  <source src="audio/<?php echo $_smarty_tpl->tpl_vars['songItem']->value['link'];?>
" type="audio/<?php echo $_smarty_tpl->tpl_vars['songItem']->value['type'];?>
">
  Your browser does not support the audio tag.
</audio>
</div>
<?php } ?>
</div><?php }} ?>
