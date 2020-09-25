<?php
$servername = $_POST["servername1"];
$username = $_POST["username1"];
$password = $_POST["password1"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
