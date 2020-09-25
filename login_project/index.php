<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css"href='style.css'
</head>

<body>
	<div class="box">
	<img src="usr.png" class="usrimg">
	 <h2> Somnath Fedora-31</h2>

		<form action="login.php" method="post">
			<p>USER NAME</p>
			<input type="text" name="username" placeholder="Enter username " required class="error">
			<p>PASSWORD</p>
			<input type="password" name="password" placeholder="Enter password" required>
			<input type="submit" value="login">
			<br><p style="color : red"><?php echo htmlspecialchars($_SESSION["error"]); ?></p><br>
			<a href=" forgetPass/forget_pass.php">Forget Password..?</a>

		</form>



	</div>

</body>
</html>
<?php session_destroy() ?>
