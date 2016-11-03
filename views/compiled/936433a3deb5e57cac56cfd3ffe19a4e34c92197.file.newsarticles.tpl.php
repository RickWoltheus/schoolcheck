<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 09:31:35
         compiled from "views\cms\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143805811ae10617897-48014443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '936433a3deb5e57cac56cfd3ffe19a4e34c92197' => 
    array (
      0 => 'views\\cms\\newsarticles.tpl',
      1 => 1477902693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143805811ae10617897-48014443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811ae1065a4d1_26801230',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811ae1065a4d1_26801230')) {function content_5811ae1065a4d1_26801230($_smarty_tpl) {?><form class="cms_form" action="" method="post"  enctype="multipart/form-data">
 <h2>newsarticles settings</h2>
  
  <input type="text" name="newsarticle_title" value="" placeholder="item_title"><br>
  <input type="text" name="newsarticle_content" value="" placeholder="item_content"><br>
  <input type="file" name="file_upload" id="newsarticle_fileToUpload"><br>
  <input type="submit" name="submit_newsarticle" value="submit changes">
</form>
</div>
<?php }} ?>
