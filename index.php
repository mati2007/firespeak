<html>
	<head>
		<title>Fire Speaker</title>
		<link rel="stylesheet" href="style.css">
		<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<img src="fireSpeaker.svg" style="width: 100%">
		
		<form method="POST" action="#" id="loginForm">
			<div class="divsForInput"><input class="inputs" id="username" type="text" name="username" placeholder="username"></div>
			<div class="divsForInput"><input class="inputs" id="password" type="password" name="password" placeholder="password"></div>
			<div id="divForInput"><input type="submit" name="submit" value="Login" id="login"></div>
		</form>
		<div id="registerHereDiv">	<a href="register.php" id="registerHere">You don't have account yet? Click here!</a></div>
		<h3>Fire Speaker is profesional service to all people comunication from everywhere.</h3>
	</body>
</html>

<?php 
session_start();
require 'db_connect.php';

if(isset($_GET["logout"])) {
	if($_GET["logout"] == "true") {
		session_destroy();
	}
}
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