<?php

$conn = new mysqli('localhost','root','','userdata');
if (session_status() == PHP_SESSION_NONE) { /*check if session is aactive and create if it doesnt exist*/
session_start();
}
if($conn->connect_errno > 0){
	die('Unable to connect to database [' . $conn->connect_error . ']');
}

?>

