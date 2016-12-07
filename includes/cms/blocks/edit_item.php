<?php
// update items
if ( isset( $_POST['edit_message'] ) ) { 
$Page_was = $_GET['Page_was'];


foreach ($result_select_items as $oneItem) {
  foreach ($oneItem as $key => $value){
    ${'new_' . $key} = $_POST[$key];
    $colomn_name = ${'new_' . $key};
    
    $sql_edit_message = "UPDATE $Page_was SET $key='$colomn_name' WHERE id=$id"; 
    if ($mysqli->query($sql_edit_message) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record ".$colomn_name." at ".$key.": " . $mysqli->error;
        var_dump($key);
        var_dump($colomn_name);
        
    }}
  }
}//show_source("edit_item.php");


