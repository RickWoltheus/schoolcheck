
<?php
$templateParser->display('views/cms/menu.tpl');
$cms_page = isset($_GET['cms_menu'])?$_GET['cms_menu']:'standard';
$templateParser->display('views/cms/master_cms.tpl');
switch($cms_page){
  case 'standard':
      $templateParser->display('views/cms/standard.tpl');
  break;
  
  case 'add':
      $Page_was = $_GET['Page_was'];
      include 'model/upload.php';
      include 'blocks/add.php';
      $templateParser->assign('result_keys', $result_keys);
      $templateParser->display('views/cms/upload.tpl');
      
  break;

  case 'edit':
  $id = $_GET['id'];
  $Page_was = $_GET['Page_was'];
  include 'model/select_item.php';
  include 'blocks/edit_item.php';
  $templateParser->assign('result_select_items', $result_select_items);
  $templateParser->display('views/cms/edit.tpl');
  break;
  
  case 'Rssfeed':
  
  break;
    
}
echo "</div>";