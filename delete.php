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
	$('.delete').click(function(){ 
		//when we click button this methid is called then
    //you have jst defined the below line to be executed when we click delte, you havent said it what to do after
		var result = confirm("Are you sure you want to delete?");
		//this result stores if i sleected yes or no right? yes
        if(result == true){
        	//if yes it comes inside here
        	//$id = $_POST['id']; //we use $_POST when we want to send data to annother form or scrren or page, no need to use here
            //simply use a Jquery selector to fetch the ID from above the below one is Jquery sleector ok? is writing input always necessary? yeah. better to write so we can identify the tag to select ok. what if some other tag is present? use that tag like $('a[name="something"]'). .got it!
            var $id = $('input[name="id"]').val();
            //the below line calls the delete_id_php using POST to send data, first is URL, 
            $.post("delete_by_id.php", {id:$id} ,function(data, status){
            	//the first parameter means that data from dlete_byid php whatever it echoes 
                alert(data);
            });
            //alert and check if the echo from delete_by_id.php is coming here
        }
        else{
        	//if no comes inside here
            alert("Cancelled");
        }
        
	})
</script>