<?php
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