<?php

if( isset($_POST['password']) && isset($_POST['username']) )
{
	session_start();
	require 'connection.php';

	if( isset( $_SESSION['login_status'] )){
		header('location:choices.php');
	}
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = $conn->query($query);
	if($result->num_rows == 0){
		echo'<script> alert("You have supplied invalid login credentials. Please try again")</script>';
		echo "<script type='text/javascript'> document.location = 'login.html'; </script>";

	}
	else
	{
		$_SESSION['login_status'] = true;
		$_SESSION['username'] = $username;
		echo "<script type='text/javascript'> document.location = 'choices.php'; </script>";

	}
}
else{
	echo "<script type='text/javascript'> document.location = 'login.html'; </script>";
}

?>