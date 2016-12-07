<?php
$sql_select_items = "SELECT * FROM scholen WHERE id=" . $id;

$result_select_items = $mysqli->query($sql_select_items);
$result_select_items = convertResultToArray($result_select_items);

