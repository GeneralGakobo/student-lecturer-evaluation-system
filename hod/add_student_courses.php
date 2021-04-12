<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Delete This Record ?')
	 if(a)
     {
        window.location.href='delete_semester_courses.php?id='+id;
     }
}
</script>	


<table class="table table-bordered">
	<tr>
		<form method="post" action="dashboard.php?info=search_y">
		<td colspan="8">
		<input type="text"  placeholder="Search Course" name="searchGroup" class="form-control" required />
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


	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Ref Id</th>";
	echo "<th>Course Id</th>";
	echo "<th>Course Name</th>";
	echo "<th>Lecture Group</th>";
    echo "<th>Department Offered</th>";
	echo "<th>Offered By</th>";
	echo "<th>Lec Email</th>";
	echo "<th>Add</th>";
	
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
        echo "<td>".$row['group']."</td>";
		echo "<td>".$row['department_offered']."</td>";
		echo "<td>".$row['offered_by']."</td>";
		echo "<td>".$row['faculty_id']."</td>";
		
		
        echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=lee'><button type='submit' class='btn btn-success'>GO</button></a></td>";
		
		echo "</tr>";
		$i++;
	}
	
?>