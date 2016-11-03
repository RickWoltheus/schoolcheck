<?php
$result_songs = $mysqli->query("SELECT * FROM songs");

$result_songs = convertResultToArray($result_songs);