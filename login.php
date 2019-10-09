<?php

session_start();
if ($_SESSION['login_status'] == false)
{
	header('location:login2.php');
}
else
{
	echo'<center><h2>You are already logged in</h2></center>';
	echo'<br><br><center><a href="logout.php">Click here to logout</a>';
	echo'<center><a href="choices.php">Click here to return to return to continue</a>';
}

?>