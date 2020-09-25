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
<style>
body {
	display: flex;
	flex-direction: column;
	color: white;
	text-shadow: 0px 0px 5px #123456;
	height: 250vh;
	background:
		linear-gradient(180deg, rgb(51, 51, 135) 10%, transparent),
		repeating-linear-gradient(45deg, rgba(34, 76, 152, 1) 0%, rgba(31, 48, 94, 0.6) 5%, transparent 5%, transparent 10%),
		repeating-linear-gradient(-45deg, rgba(34, 76, 152, 0.4) 0%, rgba(31, 48, 94, 0.5) 5%, transparent 5%, transparent 10%);
	background-color: rgba(34, 76, 152, 0.25);
}
.button {
	color:white;
	text-decoration: none;
	display: inline-block;
	margin-left: 75px;
	margin-top: 12px
}
.bar{
	background-color: rgba(0, 0, 0, 0.5);
	display:block;
	align-items: center;
	width:100%;
	overflow:hidden;
	height:40px;

}
.logo {
	width:100px;
	height:100px;
	border-radius:50%;
	overflow: hidden;
	position: absolute;
	top: 1%;
	right:  2%;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color:black;
  background-color: white;
  text-decoration: none;
}

a:active {
  color: grey;
  background-color: transparent;
  text-decoration: none;
}/* Remove default bullets */

</style>
</head>
<body>
<img  class="logo" src="Photos/logo.png" alt="logo">
<h1 style="text-align:center;">Americaniche Academy</h1>
<marquee behavior="scroll" direction="right" style="position:absolute;top:55px;color:white;" scrollamount="7"><br><i>STAY NICHE STAY AHADE<i></marquee>

	<div class="bar">
		<a class="button" href = "videos.php" target = "menu_page" title='Class Videos'>VIDEOS</a>
		<a class="button" href = "assignment.php" target = "menu_page" title='assignment'>ASSIGNMENTS</a>
		<a class="button" href = "tutorials.php" target = "menu_page" title='Tutorial'>TUTOROALS</a>
		<a class="button" href = "myassignment.php" target = "menu_page" title='Subbmited Assinments'>MY ASSIGNMENTS</a>
		<a class="button" href = "usefullinks.php" target = "menu_page" title='Links'>USEFUL LINKS</a>
		<a class="button" href = "source.php" target = "menu_page" title='source'>IMPORTTANT SOURCE</a>
		<a class="button" href = "software.php" target = "menu_page" title='Downloads'>SOFTWARES</a>
    <a class="button" href = "admin.php" target = "main_page">Admin</a>
</div>
</body>
</html>
