<?php

if ( isset( $_POST['submit_login']) ) { 
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $log = "SELECT id FROM admin_users where username='".$username."' and password='".$password."'" ;
  $log = str_replace("\'","",$log);
  $result_login = mysqli_query($mysqli,$log);
  while($row = mysqli_fetch_array($result_login))
    {
    // Store Session Data
    $_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
    }
  if(!isset($_SESSION['login_user'])) {
    echo "<div class='red'>User or Password is wrong</div>";
  }
  
  }


