<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Delete This Course ?')
	 if(a)
     {
        window.location.href='delete_courses.php?id='+id;
     }
}
</script>	

<table class="table table-bordered">
	<tr>
		<form method="post" action="dashboard.php?info=search_course">
		<td colspan="8">
		<input type="text"  placeholder="Search Course by course id,course name or department offered" name="searchGroup" class="form-control" required />
		</td>
		<td colspan="8">
		<input type="submit" value="Search Course" name="sub" class="btn btn-success" />
		</td>
		</form>
	</tr>
	</table>

<?php
	


	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Course Id</th>";
	echo "<th>Course Name</th>";
		echo "<th>Credit Hours</th>";
	echo "<th>Department Offered</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from courses ORDER BY department_offered ASC");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['course_id']."</td>";
		echo "<td>".$row['course_name']."</td>";
		echo "<td>".$row['credit_hours']."</td>";
		echo "<td>".$row['department_offered']."</td>";
		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_courses'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		echo "</tr>";
		$i++;
	}
	
?>