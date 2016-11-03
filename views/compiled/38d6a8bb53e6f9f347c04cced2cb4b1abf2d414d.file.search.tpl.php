<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 13:31:10
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1999157fb43cd630647-20104843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1477654265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1999157fb43cd630647-20104843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fb43cd6350a5_54260527',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb43cd6350a5_54260527')) {function content_57fb43cd6350a5_54260527($_smarty_tpl) {?>
<div id="search_wrapper">  
<form id="search">
<input type="text" onkeyup="showUser(this.value)" placeholder="Search for items">
<div id="txtHint"><b></b></div>
</form>
</div>

</div>

<div id="blank_space"></div>

<?php }} ?>
