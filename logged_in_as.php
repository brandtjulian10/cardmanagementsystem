<?php 
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
echo'
<div align="right">
<h5>Logged in as '.$_SESSION["username"].
'<br>
<a href=logout.php>   logout</a>
</h5>
</div>';

?>