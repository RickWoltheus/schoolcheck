<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:23:11
         compiled from "views/slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1901874947581b727fa81655-61840862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb866005e65d3ab61e558509465c0a32f03e4bf3' => 
    array (
      0 => 'views/slideshow.tpl',
      1 => 1478193407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1901874947581b727fa81655-61840862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slideshow_img1' => 0,
    'slideshow_text1' => 0,
    'slideshow_img2' => 0,
    'slideshow_text2' => 0,
    'slideshow_img3' => 0,
    'slideshow_text3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b727fac7544_97562587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b727fac7544_97562587')) {function content_581b727fac7544_97562587($_smarty_tpl) {?>
<!-- <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['slideshow_img1']->value;?>
" style="width:100%" alt="img">
    <div class="text"><?php echo $_smarty_tpl->tpl_vars['slideshow_text1']->value;?>
</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['slideshow_img2']->value;?>
" style="width:100%" alt="img">
    <div class="text"><?php echo $_smarty_tpl->tpl_vars['slideshow_text2']->value;?>
</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['slideshow_img3']->value;?>
" style="width:100%" alt="img">
    <div class="text"><?php echo $_smarty_tpl->tpl_vars['slideshow_text3']->value;?>
</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->
<div id="featured_wrapper">
<div id="slideshow">
   <div style="overflow:hidden">
     <img src="<?php echo $_smarty_tpl->tpl_vars['slideshow_img1']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slideshow_img1']->value;?>
">
     <p><?php echo $_smarty_tpl->tpl_vars['slideshow_text1']->value;?>
</p>
   </div>
   <div style="overflow:hidden">
     <img src="<?php echo $_smarty_tpl->tpl_vars['slideshow_img2']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slideshow_img2']->value;?>
">
     <p><?php echo $_smarty_tpl->tpl_vars['slideshow_text2']->value;?>
</p>
   </div>
   <div style="overflow:hidden">
     <img src="<?php echo $_smarty_tpl->tpl_vars['slideshow_img3']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slideshow_img3']->value;?>
">
     <p><?php echo $_smarty_tpl->tpl_vars['slideshow_text3']->value;?>
</p>
   </div>
</div>
<?php }} ?>
