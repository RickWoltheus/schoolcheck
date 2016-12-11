<?php


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




