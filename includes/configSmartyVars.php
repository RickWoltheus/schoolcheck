<?php
while($row = mysqli_fetch_array($result_Settings, MYSQLI_ASSOC)) {
  //text in footer
  $footerText = $row['footertext'];
  
  //title for the site
  $siteTitle = $row['siteTitle'];
  
  
  //ajax search text
  $txtHint_default = $row['txtHint_default'];
  

  

  //define topic for rss
  $_SESSION['topic'] = $row['topic'];
  
  $homepage = $row['homepage'];

  
  define('ITEMS_PP', $row['itemsPP']);
}



