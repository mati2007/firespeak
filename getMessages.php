<?php



function getData(){
	require 'db_connect.php';
	$selectMessage = mysqli_query($conn,  'SELECT * FROM `message` ORDER BY sendTime');
	$messages = mysqli_fetch_all($selectMessage);
	echo json_encode($messages);
};

getData();