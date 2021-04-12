
<script>
function deletes(id){
	
swal({
  title: "Are you sure?",
  text: "Are you sure you want to delete this course?",
  icon: "warning",
  timer: "3000",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
	debugger;
	setTimeout(function(){
  if (willDelete) {
	  setTimeout(function(){
	   window.location.href='delete_semester_courses.php?id='+id;
	  }, 3000);
    swal("Poof! Semester course has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your course is safe!");
  }
	},0)
});

}
</script>

<table class="table table-bordered">
	<tr>
		<form method="post" action="dashboard.php?info=search_cs">
		<td colspan="8">
		<input type="text"  placeholder="Search by ref id,course id,course name,lecturer name or lecturer email" name="searchGroup" class="form-control" required />
		</td>
		<td colspan="8">
		<input type="submit" value="Search Course" name="sub" class="btn btn-success" />
		</td>
		</form>
	</tr>
	</table>


<?php
		
$user=$_SESSION['user'];
$query = "SELECT * FROM hod where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					$yut = $row['department'];
				}
				
				//  echo "$yut";  
	$yu = $yut;
	echo"<h3 align='center'>$yu Department</h3>";


	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Ref Id</th>";
	echo "<th>Course Id</th>";
	echo "<th>Course Name</th>";
	echo "<th>Credit Hours</th>";
	echo "<th>Lecture Group</th>";
    // echo "<th>Department Offered</th>";
	echo "<th>Offered By</th>";
	echo "<th>Lec Email</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from semester_courses where department_offered='$yu' ORDER BY offered_by ASC");
	
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
		echo "<td>".$row['offered_by']."</td>";
		echo "<td>".$row['faculty_id']."</td>";
		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_semester_courses'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		echo "</tr>";
		$i++;
	}
	
?>