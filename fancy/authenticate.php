<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
if( isset( $_SESSION['login_status'] ))
{
	if(!$_SESSION['login_status']=="true")
		echo "<script type='text/javascript'> document.location = 'login.html'; </script>";

}
else{
		echo "<script type='text/javascript'> document.location = 'login.html'; </script>";
}
?>