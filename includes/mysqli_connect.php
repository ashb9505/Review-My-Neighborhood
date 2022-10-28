<?php

//Set database connection information
define('DB_HOST', 'localhost'); //Or could be a different server
define('DB_USER', 'root'); //MySQL credentials
define('DB_PASSWORD', ''); //MySQL credentials
define('DB_NAME', 'abakar'); //Specific database
define('port', '3308');

//Database connection
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
       OR die('Connection error');


// Check connection
if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}



//Set the encoding
mysqli_set_charset($dbc, 'utf8'); //Or whatever PHP script encoding and database collation you are using

 ?>
