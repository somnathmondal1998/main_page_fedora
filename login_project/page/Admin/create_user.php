<?php
$username = $_POST["username1"];
$userID = $_POST["userID1"];
$password = $_POST["password1"];
$privileges = $_POST["privileges1"];

require_once "../../config.php";

// Create database
$sql1 = "INSERT INTO Users VALUES ($userID,$privileges,$username)";
$sql2 = "INSERT INTO Password VALUES ($userID,$password)";
if ($conn->query($sql1) === true) {
  echo "User created successfully";
} else {
  echo "Error creating user: ";
}
if ($conn->query($sql2) === true) {
  echo "Password created successfully";
} else {
  echo "Error creating password: ";
}

$conn->close();
?>
