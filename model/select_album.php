<?php
$result_album = $mysqli->query("SELECT * FROM album");

$result_album = convertResultToArray($result_album);