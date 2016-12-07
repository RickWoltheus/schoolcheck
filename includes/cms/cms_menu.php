<div class="menucms">
<ul>
  <a href="<?php echo "?Page=".$Page; ?>&cms_menu=standard">standard</a>
  <a href="<?php echo "?Page=".$Page; ?>&cms_menu=add">add</a>
  <button id="formchange" type="button" name="button" onclick="show()" >Show</button>
</ul>
</div>
<div id="menucmschange">

<?php
$cms_page = isset($_GET['cms_menu'])?$_GET['cms_menu']:'standard';
$templateParser->display('views/cms/master_cms.tpl');
switch($cms_page){
  case 'standard':
    $templateParser->display('views/cms/standard.tpl');
  break;
  
  case 'add':
      $templateParser->display('views/cms/upload.tpl');
  break;

  case 'edit':
  $id = $_GET['id'];
  include 'model/select_item.php';
  include 'blocks/edit_item.php';
  $templateParser->assign('result_select_items', $result_select_items);
  
  $templateParser->display('views/cms/edit.tpl');
  break;
  
  case 'Rssfeed':
  
  break;
    
}
?>
</div>