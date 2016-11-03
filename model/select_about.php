<?php
$result_about = $mysqli->query("SELECT * FROM about");

$result_about = convertResultToArray($result_about);