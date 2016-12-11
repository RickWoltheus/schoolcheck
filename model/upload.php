<?php 
$sql_keys = "SELECT * FROM $Page LIMIT 1";

$result_keys = $mysqli->query($sql_keys);
$result_keys = convertResultToArray($result_keys);

