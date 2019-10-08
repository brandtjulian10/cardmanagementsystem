<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</head>
<body>
	<center>

		<div class="formdata">
			<table cellpadding="5" cellspacing="15">
				<form action="delete.php" method="post">
					<br><br>
					<tr><td>Enter your ID</td> <td><input type='number' name='id'></td></tr>
					<tr><td></td> <td><input type='button' name='dbutton' value='Delete Record' class='delete'></td></tr> 
				</form>
			</table>
		</div>
	</center> 
</body>
</html>


<script>
	$('.delete').click(function(){
		confirm("Are you sure you want to delete?");
	})
</script>


<?php

$conn = new mysqli('localhost', 'root', '', 'userdata');

if(isset($_POST['dbutton']))
{
	$id = $_POST['id'];
	$query = "DELETE FROM person WHERE id='$id'";
	if(($conn->query($query))->num_rows == 0)
		echo "<script> alert('The id '.$id.' is not available in our database') </script>";
	else
	{
		$conn->query($query);
		echo "<script> alert('You have succesfully deleted'.$id.' from the card system') </script>";
    }
}

?>