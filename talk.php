<?php
session_start();
?>

<html>
	<head>
		<title>chat</title>
		<link rel="stylesheet" href="style.css">
		<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="script.js" defer></script>
	</head>
	<body>
		<a href="index.php?logout=true"><img src="fireSpeaker.svg" id="backImg"></a>
		<div id="window"></div>
		<form method="GET" action="#" id="form">
			<input type="text" name="message" id="message" placeholder="type your message"> 
			<input id="hidden" type="hidden" value="<?php echo $_SESSION["id"] ?>">
			<button id="send" >send</button>
		</form>
	</body>
</html>












