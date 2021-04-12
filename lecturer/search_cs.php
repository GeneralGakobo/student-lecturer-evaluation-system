<?php 
$user= $_SESSION['user'];
$con=mysqli_query($conn,"select * from faculty where user_name='$user'");
// echo"$user";
$res=mysqli_fetch_assoc($con);
$fat = @$res['email'];
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from semester_courses where faculty_id='$fat' and ref_id='$search' or course_name='$search' or course_id='$search'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Records exists !!!</h2>";
}
else
{
?>
	
<h2 style="color:#00FFCC; text-decoration:underline" align="center" >Results Found</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="16"><a href="dashboard.php?info=display_semester_courses">Go Back to Courses Page</a></td>
	</tr>


	<!-- echo"<h3 align='center'><a href='#' style='color:red'>$fat</a> Dashboard</h3>"; -->
<?php

	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Ref Id</th>";
	echo "<th>Course Id</th>";
	echo "<th>Course Name</th>";
	echo "<th>Credit Hours</th>";
	echo "<th>Lecture Group</th>";
    // echo "<th>Department Offered</th>";
	// echo "<th>Offered By</th>";
	// echo "<th>Lec Email</th>";
	echo "<th>View Students</th>";
	// echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from semester_courses where faculty_id='$fat' ORDER BY course_name ASC");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['ref_id']."</td>";
		echo "<td>".$row['course_id']."</td>";
        echo "<td>".$row['course_name']."</td>";
		echo "<td>".$row['credit_hours']."</td>";
        echo "<td>".$row['group']."</td>";
		// echo "<td>".$row['department_offered']."</td>";
		// echo "<td>".$row['offered_by']."</td>";
		// echo "<td>".$row['faculty_id']."</td>";
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=check' ><button type='submit' class='btn btn-success'>GO</button></a></td>";
		
	// echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_semester_courses'><span style=color:green;>View</span></a></td>";
		
		
		// echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		echo "</tr>";
		$i++;
	}
	
?>
<?php } ?>