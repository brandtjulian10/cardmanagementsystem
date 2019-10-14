<?php
require 'authenticate.php'; 
$_SESSION['login_status'] = false;	
$_SESSION['username'] = "";
unset($_SESSION['login_status']);
session_destroy();
echo "Logged Out!";
header('location:home.php');
?>