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






// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', $siteTitle);
//include select articles 
  
// Display template: output html
$templateParser->display('head.tpl');

$templateParser->assign('result_Navigation', $result_Navigation);
$templateParser->assign('footerString', $footerText);
$templateParser->assign('txtHint_default', $txtHint_default);

//assign slideshow

$templateParser->display('views/header.tpl');

if ( isset( $_SESSION['login_user']) ) { 

$cms_session = $_SESSION['login_user'];

$templateParser->assign('cms_session', $cms_session);
}

$Page = isset($_GET['Page'])?$_GET['Page']:$homepage;
$templateParser->assign('Page', $Page);
switch($Page){
  case 'newsarticles':
  $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
  include 'model/select_newsarticles.php';
  $templateParser->assign('result', $result);
  $templateParser->assign('row_cnt', $row_cnt);
  $templateParser->display('items.tpl');
  break;
  
  case 'about':
  $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
  include 'model/select_newsarticles.php';

  break;
  
  case 'scholen':
  $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
  include 'model/select_newsarticles.php';
  $templateParser->assign('result', $result);
  $templateParser->assign('row_cnt', $row_cnt);
  $templateParser->display('scholen.tpl');
  break;
  
  case 'songs':

  break;
  
  case 'admin':
  
  if ( !isset( $_SESSION['login_user']) ) {
    include('includes/login.php');
  $templateParser->display('views/cms/admin_login.tpl');
}
  break;
}

// cms 
if ( isset( $_SESSION['login_user']) ) { 
include('includes/cms/cms.php');
include('includes/cms/cms_menu.php');
include('includes/cms/delete.php');
}

//display footer
$templateParser->display('footer.tpl');

