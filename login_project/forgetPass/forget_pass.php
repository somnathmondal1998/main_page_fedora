<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css"href='style.css'
</head>

<body>
	<div class="box">
	<img src="../usr.png" class="usrimg">
	 <h2> Forget Password</h2>

		<form action="forget_pass_php.php" method="post">
			<p>USER NAME</p>
			<input type="text" name="username" placeholder="Enter username " required>

			<input type="submit" value="Submit">
			<br><p style="color : red"><?php echo htmlspecialchars($_SESSION["error"]); ?></p><br>

		</form>



	</div>

</body>
</html>
<?php session_destroy() ?>
