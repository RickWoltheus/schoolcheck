<?php /* Smarty version Smarty-3.1.18, created on 2016-11-07 09:31:24
         compiled from "views/cms/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173174587058203bdc2c5ef0-02628573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3313da2cb8c46648550fc2a0d7c735b44f4fa78e' => 
    array (
      0 => 'views/cms/upload.tpl',
      1 => 1478193409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173174587058203bdc2c5ef0-02628573',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58203bdc315943_24459913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58203bdc315943_24459913')) {function content_58203bdc315943_24459913($_smarty_tpl) {?><form class="cms_form" action="" method="post"  enctype="multipart/form-data" >
 <h2>upload settings</h2>
 <select name="upload_option" id="upload_option" onchange="change_form()">
   <option value="select">Select</option>
   <option value="newsarticle">newsarticle</option>
   <option value="scheme">scheme</option>
   <!-- <option value="about">about</option> -->
</select><br>
<script type="text/javascript">
  function change_form(){
    var selected = document.getElementById("upload_option")
    var str = selected.options[selected.selectedIndex].value;
  
    if (str == "newsarticle"){
      $("#inputfields").load("views/cms/newsarticles.tpl");
    };
    if (str == "scheme"){
      $("#inputfields").load("views/cms/scheme.tpl");
    };
    // if (str == "about"){
    //   $("#inputfields").load("views/cms/about.tpl");
    // };
  };
</script>

<div id="inputfields">
  <p>select what you want to upload</p>
</div>
</form>
</div>
<?php }} ?>
