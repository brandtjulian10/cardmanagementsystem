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
				<form action="form.php" method="post">
					<br><br>
					<tr><td colspan="2"><b>Full Name</b></td> <td colspan="4"><input type="text" name="name"></td></tr>
					<tr><td colspan="2"><b>Date Of Birth</b></td> <td colspan="4"><input type="date" name="dob"></td></tr>
					<tr><td colspan="2"><b>Address</b></td> <td colspan="4"><input type="text" size="30" name="address"></td></tr>
					<tr><td colspan="2"><b>Bank Account Number</b></td> <td colspan="4"><input type="number" name="bankacc"></td></tr>
					<tr><td colspan="2"><b>Phone Number</b></td> <td colspan="4"><input type="number" name="phone" maxlength="10"></td></tr>
					<tr><td colspan="2"><b>Gender</b></td> <td colspan="4">Male<input type="radio" value="Male"  name="gender" checked> Female<input type="radio" value="Female" name="gender"></td></tr>
					<tr><td colspan="2"></td><td colspan="4"><input type="submit" value="Add Record" class="addbutton"></td></tr>
					<tr><td colspan="2"></td><td colspan="4"><input type="reset"></td></tr>
				</form>
			</table>
		</div>

	</center> 

</body>
</html>

<?php

require 'connection.php';
require 'logged_in_as.php';

if(isset($_POST['name']) && isset($_POST['dob']) && isset($_POST['address']) && isset($_POST['bankacc']) && isset($_POST['phone']) && isset($_POST['gender']))
{
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$bankacc = $_POST['bankacc'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$id = generateId($conn);
	$query = "INSERT INTO person(id, name, dob, address, bankacc, phone, gender) VALUES('$id', '$name', '$dob', '$address', '$bankacc', '$phone', '$gender')";
	$conn->query($query);
	$_SESSION['id']= $id;
	header("location:rs.php");
}

function generateId($conn)
{
	$id = mt_rand(10000000, 99999999);
	while((($conn->query("SELECT * FROM person WHERE id ='$id'")->num_rows) !=0))
	{
		$id = mt_rand(10000000, 99999999);
	}
	return $id;

}
?>

