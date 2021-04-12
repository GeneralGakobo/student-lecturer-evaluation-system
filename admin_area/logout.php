<?php 
	include('../dbconfig.php');
	session_start();
	
	unset($_SESSION['user']);
	header('location:../gakobowasoweto@gmail.com/index.php');

?>