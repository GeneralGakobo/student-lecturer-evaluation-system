<?php 
	include('../dbconfig.php');
	session_start();
	
	unset($_SESSION['user']);
	header('location:../hod/index.php');

?>