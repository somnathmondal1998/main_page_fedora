<?php
session_start();
//Get the data exracted from input parameters
$username=$_POST["username"];
//server side  validation of those parameters
//establish a connection to database
// Create connection
require_once "config.php";
//Construct a sql query

//Find the userId for the given username
$sql1 = "SELECT userID FROM Users WHERE username = '$username'";
$userid = (($conn->query($sql1))->fetch_assoc())["userID"];
//Find the privileges of emailID
//$sql2 = "SELECT emailID FROM Users WHERE userID = '$userid'";
//$emailid = (($conn->query($sql2))->fetch_assoc())["emailid"];


//validate the results from db and respond back
if ($userid != "")
{
 header("location: http://192.168.29.197/login_project/forgetPass/forget_pass_email.php");
 $_SESSION["emailid"] = $emailid;
 $_SESSION["loggedin"] = true;
 $_SESSION["work"] = "create_pass";
}
else
{
  header("location: http://192.168.29.197/login_project/forgetPass/forget_pass.php");
 $_SESSION["error"] = "Invalid Username";
}
$conn->close();
?>
