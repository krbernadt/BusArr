<?php
$host = 'localhost'; 
$user = 'root'; 
$pass = '';
$dbname = 'pbae';

// 1. Create a database connection
$connection = mysqli_connect($host,$user,$pass, $dbname);

if (!$connection) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, $dbname);
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Internal server error');
}

?>