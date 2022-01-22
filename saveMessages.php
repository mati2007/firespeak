<?php
require 'db_connect.php';


$message = mysqli_query($conn,  'INSERT INTO `message`(`ID`, `text`, `sendTime`, `userId`) VALUES (null,"' . $_GET["message"] . '","' . date("Y-m-d H:i:s") . '", ' . $_GET["userId"] . ')');



