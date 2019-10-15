<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Person</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body BGCOLOR ="FFFFFFF">
		<div class="container">
			<br>
			<br>
			<br>
			<h2 align="center">Person</h2><br />
			<div class="form-group">
				<center><div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Person Details" class="form-control" />
				</div></center>
			</div>
			<br>
			<div id="result"></div>
		</div>
		<div style="clear:both">
		</div>
		<br>
		<br>
		<br>
		<br>
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>

<html>
<body>
	<br>
	<br>
	<center><a href='choices.php'> Choose a different option </a></center>
</body>
</html>


<?php
require 'authenticate.php';
require 'logged_in_as.php';

?>