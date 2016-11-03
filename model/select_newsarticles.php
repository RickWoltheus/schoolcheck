<?php
$start_items= (($page_nr-1)*ITEMS_PP);
$sql ="SELECT * FROM newsarticles  LIMIT " . $start_items . ", " . ITEMS_PP ;

$sql_count ="SELECT * FROM newsarticles";
$result_count = $mysqli->query($sql_count);
$row_cnt = $result_count->num_rows/ITEMS_PP;

$result = $mysqli->query($sql);
$result = convertResultToArray($result);

$templateParser->assign('row_cnt', $row_cnt);