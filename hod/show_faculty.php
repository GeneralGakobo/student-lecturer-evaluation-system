
<script>
function deletes(id){
	
swal({
  title: "Are you sure?",
  text: "Are you sure you want to delete this faculty?",
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
	   window.location.href='delete_faculty.php?id='+id;
	  }, 3000);
    swal("Poof! Faculty has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your Faculty is safe!");
  }
	},0)
});

}
</script>

<table class="table table-bordered">
	<tr>
		<form method="post" action="dashboard.php?info=search_faculty">
		<td colspan="8">
		<input type="text"  placeholder="Search Lecturer by name,email,mobile,school or department" name="searchGroup" class="form-control" required />
		</td>
		<td colspan="8">
		<input type="submit" value="Search Lecturer" name="sub" class="btn btn-success" />
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
	echo "<th>Name</th>";
	echo "<th>Designation</th>";
	// echo "<th>school</th>";
	// echo "<th>department</th>";
	echo "<th>Email</th>";
	echo "<th>Mobile</th>";
	echo "<th>Pass Key</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	
	$que=mysqli_query($conn,"select * from faculty where department='$yu' ");
	
	while($row=mysqli_fetch_assoc($que))
	{
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['designation']."</td>";



		
		
		// echo "<td>".$davie."</td>";

		// echo "<td>".$row['department']."</td>";



		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['password']."</td>";


		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_faculty'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		
		// if($row['status'])
		// {
		// echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:red;></span></a></td>";
		// }
		// else
		// {
		// echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
		// }
		echo "</tr>";
		$i++;
	}
	
?>