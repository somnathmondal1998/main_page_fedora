<?php
session_start();
//Get the data exracted from input parameters
$username=$_POST["username"];
$password=$_POST["password"];
//server side  validation of those parameters
//establish a connection to database
// Create connection
require_once "config.php";
//Construct a sql query

//Find the userId for the given username
$sql1 = "SELECT ID FROM details WHERE Firstname = '$username'";
$userid = (($conn->query($sql1))->fetch_assoc())["ID"];
//Find the privileges of userID
$sql2 = "SELECT Type FROM details WHERE ID = '$userid'";
$privileges = (($conn->query($sql2))->fetch_assoc())["Type"];
//Find the original password for the correspoding userid
$sql3 = "SELECT Password FROM user_pwd WHERE ID = '$userid'";
$password_ori = (($conn->query($sql3))->fetch_assoc())["Password"];

//validate the results from db and respond back
if ($userid != "")
{
    if ($password_ori == $password)
    {
      header("location: page/index.php");
      // Store data in session variables
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $userid;
      $_SESSION["username"] = $username;
      $_SESSION["privileges"] = $privileges;
    }
    else
    {
      header("location: http://192.168.29.197/login_project/index.php");
      $_SESSION["error"] = "Invalid Password";
    }
}
else
{
  header("location: http://192.168.29.197/login_project/index.php");
 $_SESSION["error"] = "Invalid Username";
}
$conn->close();
?>
