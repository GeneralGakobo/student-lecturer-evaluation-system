<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from departments where id='$info'");
	header('location:dashboard.php?info=display_department');
?>