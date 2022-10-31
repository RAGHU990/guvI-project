<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'database-guvi-raghu.ck2rgsp30sfg.ap-south-1.rds.amazonaws.com');
define('DB_USERNAME', 'guvi_user');
define('DB_PASSWORD', 'guvipass');
define('DB_NAME', 'guvi_database');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
?>