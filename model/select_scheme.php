<?php

$result_scheme = $mysqli->query("SELECT * FROM scheme");

$result_scheme = convertResultToArray($result_scheme);
