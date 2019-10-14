<?php
require 'connection.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = $conn->real_escape_string($_POST["query"]);
	$query = "
	SELECT * FROM person 
	WHERE name LIKE '%".$search."%'
	OR address LIKE '%".$search."%' 
	OR phone LIKE '%".$search."%' 
	OR gender LIKE '%".$search."%' 
	OR bankacc LIKE '%".$search."%'
	";
}
else
{
	$query = "SELECT * FROM person";
}

$result = $conn->query($query);
if($result->num_rows > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>DOB</th>
							<th>Phone</th>
							<th>Bank Account Number</th>
							<th>Gender</th>
						</tr>';
	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$output .= '
			<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["dob"].'</td>
				<td>'.$row["phone"].'</td>
				<td>'.$row["bankacc"].'</td>
				<td>'.$row["gender"].'</td>
			</tr>
		';
	}
	echo '<center>'.$output.'</center>';
}
else
{
	echo 'Data Not Found';
}
?>