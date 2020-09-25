<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if($_SESSION["privileges"] !== "admin")
{
    header("location: http://192.168.29.197/login_project/index.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Create user</h2>

<form action="create_user.php" method="post">
  <label for="username1">Username:</label><br>
  <input type="text" name="username"><br>

  <label for="userID1">UserID:</label><br>
  <input type="text" name="userID"><br>

  <label for="password1">Password:</label><br>
  <input type="text" name="password"><br><br>

  <label for="privileges1">Privileges:</label><br>
  <input type="text" name="privileges1"><br><br><br><br>

  <input type="submit" value="Create">
</form>
</body>
</html>
