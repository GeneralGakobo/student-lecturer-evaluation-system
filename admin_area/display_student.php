<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_student.php?id='+id;
     }
}
</script>	


<table class="table table-bordered">
	<tr>
		<form method="post" action="dashboard.php?info=search_student">
		<td colspan="8">
		<input type="text"  placeholder="Search Student by name,email,student id,phone no or major" name="searchGroup" class="form-control" required />
		</td>
		<td colspan="8">
		<input type="submit" value="Search Student" name="sub" class="btn btn-success" />
		</td>
		</form>
	</tr>
	</table>

<?php
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Studentid</th>";
	echo "<th>Email</th>";
	// echo "<th>Password</th>";
	echo "<th>Mobile</th>";
	echo "<th>school</th>";
	echo "<th>Department</th>";
	echo "<th>Major</th>";
	echo "<th>gender</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from user ORDER BY studentid ASC");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['studentid']."</td>";
		echo "<td>".$row['email']."</td>";
		// echo "<td>".$row['pass']."</td>";
		echo "<td>".$row['mobile']."</td>";

		@$row['school'];
		$ui = @$row['school'];

 					$query = "SELECT * FROM schools where id=$ui ";
					 
				$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
				$do = mysqli_query($conn, "select * from schools where id=$ui");
				while($rw = mysqli_fetch_array($do)){
					$ui = $rw['school_name'];
				}

		echo "<td>$ui</td>";

		@$row['department'];
		$yu = @$row['department'];
		$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
	$query = "SELECT * FROM departments where id=$yu ";
				$doo = mysqli_query($conn, $query);
				while($rwo = mysqli_fetch_array($doo)){
					$re = $rwo['department_name'];
				}


		echo "<td>$re</td>";
		echo "<td>".$row['major']."</td>";
		echo "<td>".$row['gender']."</td>";
		
		
		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_student'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		echo "</tr>";
		$i++;
	}

	
				
			//  echo "$ui";
				// $query = "SELECT * FROM schools where id=$iu ";
				// $do =mysqli_query($conn, $query);
				// while($row = mysqli_fetch_array($do)){
				// 	$ui = '<h3 value="'.$row['id'].'"> '.$row['school_name'].'</h3>';
				// }

	
?>