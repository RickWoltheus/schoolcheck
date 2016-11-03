<?php
$result_social = $mysqli->query("SELECT * FROM social");

$result_social = convertResultToArray($result_social);