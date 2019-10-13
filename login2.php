<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Submit Data</title>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</head>
<body>
	<center>
		<div class="formdata">
		    <table cellpadding="5" cellspacing="15">
				<form action="login2.php" method="post">
					<br><br>
					<tr><td colspan="2"><b>Username</b></td> <td colspan="4"><input type="text" name="username"></td></tr>
					<tr><td colspan="2"><b>Password</b></td> <td colspan="4"><input type="password" name="password"></td></tr>
					<tr><td colspan="2"></td><td colspan="4"><input type="submit" value="Login"></td></tr>
				</form>
			</table>
		</div>
	</center> 

</body>
</html>

<?php
require 'connection.php';
if((isset($_POST['password'])) && (isset($_POST['username'])))
{ 
		echo'<script> alert("You have supplied invalid login credentials. Please try again")</script>';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = $conn->query($query);
	if($result->num_rows == 0)
		echo'<script> alert("You have supplied invalid login credentials. Please try again")</script>';
	else
	{
		$_SESSION['login_status'] = true;
		$_SESSION['username'] = $username;
		header('location:choices.php');
	}
}
