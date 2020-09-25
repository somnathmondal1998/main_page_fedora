<?php
$conn = mysqli_connect("localhost", "somnath", "somnath@1","practicedb");
if (!$conn){
  die("Connection failed: " . mysqli_error());
}
//mysqli_select_db("practicedb") or die("Couldn't select database.");

$username1 = $_POST['username'];
$password1 = $_POST['password'];

$sql = "SELECT * FROM unampwd WHERE username = '$username1' AND password = '$password1' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
    echo 'Your in';
   }
else
   {
    echo 'invalid password';
   }
?>
