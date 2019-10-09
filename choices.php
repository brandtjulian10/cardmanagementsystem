</html>
<head>
	<title>Choose an action</title>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</head>

<body>
	<br><br>
	<center>
		<table cellpadding="5" cellspacing="15">
			<tr><b><th colspan="20"> Please Choose An Action</th></b></tr>
			<tr><td colspan="20"><a href="form.php">Add Record</a></td></tr>
			<tr><td colspan="20"><a href="delete.php">Delete Record</a></td></tr>
			<tr><td colspan="20"><a href="search.php">Search Record</a></td></tr>
		</table>
	</center>
</body>
</html>

<?php
session_start();
require 'logged_in_as.php';

?>