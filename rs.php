<?php
session_start();
require 'logged_in_as.php';
require 'connection.php';
$id = $_SESSION['id'];
$query = "SELECT * FROM person WHERE id='$id'";
$result = $conn->query($query);
$row = $result->fetch_array(MYSQLI_ASSOC);
$name = $row['name'];
$dob = $row['dob'];
$address = $row['address'];
$bankacc = $row['bankacc'];
$phone = $row['phone'];
$gender = $row['gender'];

echo'
	<br><br>
    <center>
    	<h2> You have successfully registered, '.$name.'. Here are your details </h2> 
		<div class="formdata">
			<table cellpadding="5" cellspacing="15" border="2">
				<form action="form.php" method="post">
					<br><br>
					<tr><td colspan="2"><b>ID</b></td> <td colspan="4">'.$id.'</td></tr>
					<tr><td colspan="2"><b>Full Name</b></td> <td colspan="4">'.$name.'</td></tr>
					<tr><td colspan="2"><b>Date Of Birth</b></td> <td colspan="4">'.$dob.'</td></tr>
					<tr><td colspan="2"><b>Address</b></td> <td colspan="4">'.$address.'</td></tr>
					<tr><td colspan="2"><b>Bank Account Number</b></td> <td colspan="4">'.$bankacc.'</td></tr>
					<tr><td colspan="2"><b>Phone Number</b></td> <td colspan="4">'.$phone.'</td></tr>
					<tr><td colspan="2"><b>Gender</b></td> <td colspan="4">'.$gender.'</td></tr>
				</form>
			</table>
		</div>
	</center>';

echo '<center> <br><br> <a href="form.php"> Add Another Record </a> </center>';

?>