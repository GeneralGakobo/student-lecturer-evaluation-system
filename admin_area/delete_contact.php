<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from contact where id='$info'");
	header('location:dashboard.php?info=contact');
?>