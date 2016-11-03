<?php
while($row = mysqli_fetch_array($result_Settings, MYSQLI_ASSOC)) {
  //text in footer
  $footerText = $row['footertext'];
  
  //title for the site
  $siteTitle = $row['siteTitle'];
  
  //header image
  $headerImg = $row['headerImg'];
  
  //ajax search text
  $txtHint_default = $row['txtHint_default'];
  
  $blog_title = $row['blog_title'];
  
  //about text
  $aboutText = $row['aboutText'];
  //define topic for rss
  $_SESSION['topic'] = $row['topic'];
  

}
//slideshow settings
$slideshow_text1 = "test1";
$slideshow_text2 = "test2";
$slideshow_text3 = "test3";

$slideshow_img1 = "images/arctic1.png";
$slideshow_img2 ="images/arctic2.png";
$slideshow_img3 = "images/arctic3.png";

$scheme_name1 = "date";
$scheme_name2 = "name";
$scheme_name3 = "city";
$scheme_name4 = "country";
$scheme_name5 = "rating";
$scheme_name6 = "image";

$number_of_items_PP = 3;
