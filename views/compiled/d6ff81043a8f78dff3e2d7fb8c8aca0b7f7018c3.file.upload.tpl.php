<?php /* Smarty version Smarty-3.1.18, created on 2016-12-02 13:46:42
         compiled from "views\cms\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064858170479a69983-54713818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ff81043a8f78dff3e2d7fb8c8aca0b7f7018c3' => 
    array (
      0 => 'views\\cms\\upload.tpl',
      1 => 1480677035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064858170479a69983-54713818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58170479aaac90_59669445',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58170479aaac90_59669445')) {function content_58170479aaac90_59669445($_smarty_tpl) {?><form class="cms_form" action="" method="post"  enctype="multipart/form-data" >
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
