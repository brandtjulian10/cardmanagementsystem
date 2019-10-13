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
		header("Refresh:1; url = index.html");
	}
	else
	{
		$_SESSION['login_status'] = true;
		$_SESSION['username'] = $username;
		header('location:choices.php');
	}
}
else{
	header('Location:index.html');
}

?>