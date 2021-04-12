<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from evaluate_courses where id='$info'");
	header('location:index.php?info=evaluate');
?>