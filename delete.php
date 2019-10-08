<?php
    $conn = new mysqli('localhost', 'root', '', 'userdata');
?>
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
				<form method="post"> <!-- removed action as no submission of form is required -->
					<br><br>
					<tr><td>Enter your ID</td> <td><input type='number' name='id'></td></tr>
					<tr><td></td> 
                    <td><input type='button' name='dbutton' value='Delete Record' class='delete'></td></tr> 
				</form>
			</table>
		</div>
	</center> 
</body>
</html>
<script>
	$('.delete').click(function(){ //did you check this  This works not after that anything works
    //you have jst defined the below line to be executed when we click delte, you havent said it what to do after
		var result = confirm("Are you sure you want to delete?");
        if(result == true){
        	//$id = $_POST['id']; //we use $_POST when we want to send data to annother form or scrren or page, no need to use here
            //simply use a Jquery selector to fetch the ID from above
            var $id = $('input[name="id"]').val();
            $.post("delete_by_id.php", {id:$id} ,function(data, status){
                alert(data);
            });
            //alert and check if the echo from delete_by_id.php is coming here
        }
        else{
            alert("Cancelled");
        }
        
	})
</script>