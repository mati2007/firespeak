<html>
	<head>	
		<title>Fire Speaker - register</title>
		<link rel="stylesheet" href="style.css">
		<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<form method="POST" action="#">
			<input class="inputs" id="username" type="text" name="username" placeholder="username min. 14 characters und 1 digit">
			<input class="inputs" id="e-mail" type="text" name="e-mail" placeholder="email">
			<input class="inputs" id="password" type="password" name="password" placeholder="password min. 10 characters und 2 digits">
			<input class="inputs" id="dateOfBirth" type="date" name="date" placeholder="select your date of birth">
			<input class="inputs" id="register" type="submit" name="register" value="register">
		</form>
	</body>
</html>

<?php
require 'db_connect.php';
if(isset($_POST["register"])) {
	$register = mysqli_query($conn,  "INSERT INTO `users` (`ID`, `username`, `usernameLog`, `email`, `password`, `dateOfBirth`,  `created`)VALUES (null,  '" . $_POST["username"] . "',  '" . md5($_POST["username"]) . "', '" . $_POST["e-mail"] . "',  '" . md5($_POST["password"]) . "', '" . $_POST["date"] . "', '" . date("Y-m-d H:i:s") . "')");	
}



