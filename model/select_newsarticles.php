<?php
$start_items= (($page_nr-1)*ITEMS_PP);
$sql ="SELECT * FROM ".$Page." LIMIT " . $start_items . ", " . ITEMS_PP ;

$sql_count ="SELECT * FROM $Page";
$result_count = $mysqli->query($sql_count);
$row_cnt = $result_count->num_rows/ITEMS_PP;

$result = $mysqli->query($sql);


if ( isset( $_SESSION['login_user']) && (empty($result))) { 
echo "<p class='error'>No result <br> you'r page name must be the same as your table name. current page is ".$Page."</p>";
var_dump($result);

}else{
  $result = convertResultToArray($result);
}
