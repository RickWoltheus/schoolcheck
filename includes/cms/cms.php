<?php
echo "<div id='cms_menu'>";

// check if submit is clicked
if ( isset( $_POST['submit_standard'] ) ) { 

//define vars
$new_siteTitle = $_POST["new_siteTitle"];
$new_footertext = $_POST["new_footertext"];
$new_homepage = $_POST["homepage"];

//standard options
if ($new_siteTitle != "") {
$sql_siteTitle = "UPDATE settings SET siteTitle='$new_siteTitle' WHERE id=1";
$result_siteTitle = mysqli_query($mysqli,$sql_siteTitle );
}

if ($new_footertext != "") {
$sql_footertext = "UPDATE settings SET footertext='$new_footertext' WHERE id=1";
$result_footertext = mysqli_query($mysqli,$sql_footertext );
}

if ($new_homepage!= "") {
$sql_homepage = "UPDATE settings SET homepage='$new_homepage' WHERE id=1";
$result_homepage = mysqli_query($mysqli,$sql_homepage );
}}


// Check if image file is a actual image or fake image not working anymore
if(isset($_POST["submit_upload"])) {
  $upload_option =  $_POST["upload_option"];
  // newsarticles post
  if ($upload_option == "newsarticle") {
  $upload_title =  $_POST["newsarticle_title"];
  $upload_content =  $_POST["newsarticle_content"];
  } 
  // upload vars
  require 'includes/cms/check_if_image.php';
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  require('upload_image.php');

}
   }

