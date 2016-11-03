<?php
echo "<div id='cms_menu'>";

// check if submit is clicked
if ( isset( $_POST['submit_standard'] ) ) { 

//define vars
$new_siteTitle = $_POST["new_siteTitle"];
$new_footertext = $_POST["new_footertext"];
$new_blog_title = $_POST["blog_title"];

//standard options
if ($new_siteTitle != "") {
$sql_siteTitle = "UPDATE settings SET siteTitle='$new_siteTitle' WHERE id=1";
$result_siteTitle = mysqli_query($mysqli,$sql_siteTitle );
}

if ($new_footertext != "") {
$sql_footertext = "UPDATE settings SET footertext='$new_footertext' WHERE id=1";
$result_footertext = mysqli_query($mysqli,$sql_footertext );
}

if ($new_blog_title!= "") {
$sql_blog_title = "UPDATE settings SET blog_title='$new_blog_title' WHERE id=1";
$result_blog_title = mysqli_query($mysqli,$sql_blog_title );
}}
//newsarticle



  
  // Check if image file is a actual image or fake image
if(isset($_POST["submit_upload"])) {
  $upload_option =  $_POST["upload_option"];
  // newsarticles post
  if ($upload_option == "newsarticle") {
  $upload_title =  $_POST["newsarticle_title"];
  $upload_content =  $_POST["newsarticle_content"];
  } 
  if ($upload_option == "scheme") {
  $scheme_name =  $_POST["scheme_name"];
  $scheme_date =  $_POST["scheme_date"];
  $scheme_city =  $_POST["scheme_city"];
  $scheme_street =  $_POST["scheme_street"];
  $scheme_rating =  $_POST["scheme_rating"];
  } 
  // upload vars
  require 'includes/cms/check_if_image.php';
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["file_upload"]["name"]). " has been uploaded.";
          if ($upload_option == "newsarticle"){
          $sql_upload = "INSERT INTO newsarticles (title, content, image)VALUES ('$upload_title', '$upload_content', '$file_name')";
        }
        if ($upload_option == "scheme"){
        $sql_upload = "INSERT INTO scheme (date, name, city, street, rating, image)VALUES ('$scheme_date', '$scheme_name', '$scheme_city', '$scheme_street', '$scheme_rating', '$file_name')";
      }
        
      if ($mysqli->query($sql_upload) === TRUE) {
      echo "New record created successfully";
    }else   {
    echo "Error: " . $sql_upload . "<br>" . $mysqli->error;
}

     }
   }
}
