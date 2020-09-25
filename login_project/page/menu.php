<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: http://192.168.29.197/login_project/index.html");
    exit;
}
?>
<html>
<head>
  <style>
  body {
  	color: white;
  	text-shadow: 0px 0px 5px #123456;
  	height: 250vh;
  	background:
  		linear-gradient(-135deg, rgb(51, 51, 135) 10%, transparent),
  		repeating-linear-gradient(45deg, rgba(34, 76, 152, 1) 0%, rgba(31, 48, 94, 0.6) 5%, transparent 5%, transparent 10%),
  		repeating-linear-gradient(-45deg, rgba(34, 76, 152, 0.4) 0%, rgba(31, 48, 94, 0.5) 5%, transparent 5%, transparent 10%);
  	background-color: rgba(34, 76, 152, 0.25);
  }
  .logo {
  	width:100px;
  	height:100px;
  	border-radius:50%;
  	overflow: hidden;
    align:center;
    margin-left: 20px;
  }
  </style>
</head>
<body>
  <img src=" Photos/user.png" class="logo" alt="logo">
  <p style="text-align:center;margin-right:px;color:white;"><?php echo htmlspecialchars($_SESSION["username"]); ?><br><a href="../logout.php" style="color:red;text-decoration:underline" target = "_top">Logout</a></p>
</body>
</html>
