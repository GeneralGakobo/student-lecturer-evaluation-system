<?php
include('../dbconfig.php');
	
	mysqli_query($con,"delete * from feedback");
	header('location:dashboard.php?info=feedback');
?>