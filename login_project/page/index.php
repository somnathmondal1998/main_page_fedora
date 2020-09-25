<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: http://192.168.29.197/login_project/index.html");
    exit;
}
?>
<!DOCTYPE html>
<html>

   <head>
      <title>Americaniche  Library</title>
   </head>
<frameset rows = "150,*" border="0">

 <frame src = "top.php" name = "top_page" scrolling="no" />

      <frameset cols = "150,*" border="0">
        <frame src = "menu.php" name = "menu_page" scrolling="no" />
        <frame src = "main.html" name = "main_page" />
      </frameset>
      <noframes>
         <body>Your brower does not support frames.</body>
      </noframes>
</frameset>
</html>
