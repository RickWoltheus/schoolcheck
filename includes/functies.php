<?php


function convertResultToArray($DBResult) {
  $resultArray = array();
  
  //convert DBResult to Array
  while ($row = $DBResult->fetch_assoc()) {
      $resultArray[] = $row;
  }
  
  return $resultArray;
}

function convertResult_navigationToArray($DBResultnav) {
  $resultArray = array();
  
  //convert DBResult to Array
  while ($row = $DBResultnav->fetch_assoc()) {
      $resultArray[] = $row;
  }
  
  return $resultArray;
}