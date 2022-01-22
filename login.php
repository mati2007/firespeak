<html>
	<head>
		<title>Fire Speaker - login</title>
		<link rel="stylesheet" href="style.css">
		<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<form method="POST" action="#">
			<input class="inputs" id="username" type="text" name="username" placeholder="username">
			<input class="inputs" id="password" type="password" name="password" placeholder="password">
			<input type="submit" name="submit">
		</form>
		
	</body>
</html>

<?php 
session_start();
require 'db_connect.php';

if(isset($_POST["submit"])) {
	$user = mysqli_query($conn,  'SELECT * FROM `users` WHERE usernameLog = "' . md5($_POST["username"]) . '" AND password = "' . md5($_POST["password"]) . '"');
	$userData = mysqli_fetch_row($user);
	if (empty($userData)) {
		echo "failed to log in, try again";
	} else {
		$_SESSION["username"] = $userData[1];
		$_SESSION["id"] = $userData[0];
		$_SESSION["dateOfBirth"] = $userData[4];
		$_SESSION["e-mail"] = $userData[2];
		header('Location: talk.php');
	}
}

