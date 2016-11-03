<?php

$result_Navigation = $mysqli->query("SELECT * FROM navigation");

$result_Navigation = convertResultToArray($result_Navigation);