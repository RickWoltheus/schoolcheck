<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','local_development');//options are local_development, development and production

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
if (PROJECT_STATUS != "local_development"){
define('DB_HOST','localhost');
define('DB_NAME','my_band');
define('DB_USERNAME','');
define('DB_PASSWORD','');
} else {
  define('DB_HOST','localhost');
  define('DB_NAME','my_band');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','');
}

?>
