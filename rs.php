<?php
session_start();
$conn = new mysqli('localhost','root','','userdata');
$id = $_SESSION['id'];
$row = ($conn->query("SELECT name FROM person WHERE id='$id'"))->fetch_array(MYSQLI_NUM);
$name = $row[1];
$dob = $row[2];
$address = $row[3];
$bankacc = $row[4];
$phone = $row[5];
$gender = $row[6];

echo'
    <center>
		<div class="formdata">
			<table cellpadding="5" cellspacing="15" border="2">
				<form action="form.php" method="post">
					<br><br>
					<tr><td colspan="2"><b>Full Name</b></td> <td colspan="4">".$name"</td></tr>
					<tr><td colspan="2"><b>Date Of Birth</b></td> <td colspan="4">".$dob."</td></tr>
					<tr><td colspan="2"><b>Address</b></td> <td colspan="4">".$address."</td></tr>
					<tr><td colspan="2"><b>Bank Account Number</b></td> <td colspan="4">".$bankacc."</td></tr>
					<tr><td colspan="2"><b>Phone Number</b></td> <td colspan="4">".$phone."</td></tr>
					<tr><td colspan="2"><b>Gender</b></td> <td colspan="4">".$gender."</td></tr>
				</form>
			</table>
		</div>
	</center>';

echo '<center> <br><br> <a href="form.php"> Add Another Record </a> </center>';

?>