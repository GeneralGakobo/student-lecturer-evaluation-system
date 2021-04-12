<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from semester_courses where id='$info'");
	header('location:dashboard.php?info=display_semester_courses');
?>