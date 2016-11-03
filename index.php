<?php

session_start();

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
// create function convertResultToArray
include 'includes/functies.php';
//site settings
include('model/select_settings.php');

// include setting smarty vars
include 'includes/configSmartyVars.php';
// get navigation items
include('model/select_nav.php');
// get social icons
include('model/select_icons.php');
// get songs
include('model/select_songs.php');
//get about text







// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', $siteTitle);
//include select articles 
  
// Display template: output html
$templateParser->display('head.tpl');

$templateParser->assign('result_Navigation', $result_Navigation);
$templateParser->assign('footerString', $footerText);
$templateParser->assign('headerImg', $headerImg);
$templateParser->assign('txtHint_default', $txtHint_default);

//assign slideshow
$templateParser->assign('slideshow_text1', $slideshow_text1);
$templateParser->assign('slideshow_text2', $slideshow_text2);
$templateParser->assign('slideshow_text3', $slideshow_text3);
$templateParser->assign('slideshow_img1', $slideshow_img1);
$templateParser->assign('slideshow_img2', $slideshow_img2);
$templateParser->assign('slideshow_img3', $slideshow_img3);



$templateParser->display('views/header.tpl');
$templateParser->display('views/search.tpl');
$templateParser->display('views/rss_page.tpl');

$Page = isset($_GET['Page'])?$_GET['Page']:'home';

switch($Page){
  case 'home':
   $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
   
    include('model/select_album.php');
    include('model/select_newsarticles.php');
    
    $templateParser->assign('blog_title', $blog_title);
    $templateParser->assign('result', $result);
    $templateParser->assign('result_album', $result_album);
    $templateParser->assign('result_social', $result_social);
    $templateParser->assign('row_cnt', $row_cnt);
    
    $templateParser->display('views/slideshow.tpl');
    $templateParser->display('views/featured.tpl');
    $templateParser->display('views/newsarticles.tpl');
    $templateParser->display('views/welcome.tpl');
    
  break;
  
  case 'about':
  include('model/select_about.php');
    $templateParser->assign('result_about', $result_about);
    $templateParser->assign('aboutText', $aboutText);
    $templateParser->display('views/about.tpl');
    
  break;
  
  case 'scheme':
  include('model/select_scheme.php');
  $templateParser->assign('scheme_name1', $scheme_name1);
  $templateParser->assign('scheme_name2', $scheme_name2);
  $templateParser->assign('scheme_name3', $scheme_name3);
  $templateParser->assign('scheme_name4', $scheme_name4);
  $templateParser->assign('scheme_name5', $scheme_name5);
  $templateParser->assign('scheme_name6', $scheme_name6);
  $templateParser->assign('result_scheme', $result_scheme);
  
  $templateParser->display('views/scheme.tpl');
  break;
  
  case 'songs':
  $templateParser->assign('result_songs', $result_songs);
  $templateParser->display('views/songs.tpl');
  break;
  
  case 'admin':
  include('includes/login.php');
  $templateParser->display('views/cms/admin_login.tpl');
  break;
}
if ( isset( $_SESSION['login_user']) ) { 
include('includes/cms/cms.php');
include('includes/cms/cms_menu.php');
}
$templateParser->display('footer.tpl');

