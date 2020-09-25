<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'somnath');
define('DB_PASSWORD', 'somnath@1');
define('DB_NAME', 'Authorization');

/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}
?>
