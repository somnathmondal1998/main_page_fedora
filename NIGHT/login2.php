<?php
//Get the data exracted from input parameters
$username1=$_POST["username"];
$password1=$_POST["password"];
//server side  validation of those parameters
//establish a connection to database
// Create connection
$conn = new mysqli("localhost", "somnath", "somnath@1","Authorization");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//Construct a sql query

//Find the userId for the given username
$sql1 = "SELECT userID FROM Users WHERE username = '$username1'";
$userid = (($conn->query($sql1))->fetch_assoc())["userID"];

//Find the original password for the correspoding userid
$sql2 = "SELECT password FROM Password WHERE userID = '$userid'";
$password_ori = (($conn->query($sql2))->fetch_assoc())["password"];

//validate the results from db and respond back
if ($password_ori == $password1)
 {
//echo 'Valid Password and Username.';
header("location: /../index_1.html");
//echo $password1;
//echo "<html><br></html>";
//echo $password_ori;
}
else
{
echo 'Invalid password or Username.';
header("location: http://192.168.29.197");
//echo $password1;
//echo "<html><br></html>";
//echo $password_ori;
}
$conn->close();
//mysqli_close($conn);
?>
