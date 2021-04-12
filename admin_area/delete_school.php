<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from schools where id='$info'");
	header('location:dashboard.php?info=display_school');
?>