<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if($_SESSION["loggedin"] !== true && $_SESSION["work"] !== "create_pass")
{
    echo "Time out";
    exit;
}
?>
<html>
<body>

<h2>Create user</h2>

<form action="create_user.php" method="post">

  <label for="newPass">New password</label><br>
  <input type="text" name="newPass"><br>

  <label for="confPass"> Conform Password:</label><br>
  <input type="text" name="confPass"><br><br><br>

  <input type="submit" value="Create">
</form>
</body>
</html>
<?php session_destroy() ?>
