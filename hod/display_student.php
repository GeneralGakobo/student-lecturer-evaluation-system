
<script>
function deletes(id){
	
swal({
  title: "Are you sure?",
  text: "Are you sure you want to delete this student?",
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
	   window.location.href='delete_student.php?id='+id;
	  }, 3000);
    swal("Poof! Student has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your student is safe!");
  }
	},0)
});

}
</script>


<table class="table table-bordered">
	<tr>
		<form method="post" action="dashboard.php?info=search_student">
		<td colspan="8">
		<input type="text"  placeholder="Search Student by name,email,student id,school, department,phone no or major" name="searchGroup" class="form-control" required />
		</td>
		<td colspan="8">
		<input type="submit" value="Search Student" name="sub" class="btn btn-success" />
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
					
				//   echo "$yut"; 
				}
				 
	$yu = $yut;
echo"<h3 align='center'>$yu Department</h3>";

	$pan = "select * from departments where department_name='$yu' ";
	$run = mysqli_query($conn, $pan);
	while($ran = mysqli_fetch_array($run)){
		$dream = $ran['id'];
	}
	$mine = $dream;



// echo "$yu";
// echo "$mine";
	
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Studentid</th>";
	echo "<th>Email</th>";
	// echo "<th>Password</th>";
	echo "<th>Mobile</th>";



	//  echo "<th>school</th>";
	//  echo "<th>Department</th>";
	echo "<th>Major</th>";
	echo "<th>gender</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;

	$quet=mysqli_query($conn,"select * from user where department='$mine' ORDER BY studentid ASC");
	
	while($row=mysqli_fetch_array($quet))
	{
	echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['studentid']."</td>";
		echo "<td>".$row['email']."</td>";
		// echo "<td>".$row['pass']."</td>";
		echo "<td>".$row['mobile']."</td>";
		// @$row['department'];
		// $ui = @$row['department'];

 		// 			$query = "SELECT * FROM departments where id=$ui ";
					 
		// 		$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
		// 		$do = mysqli_query($conn, "select * from departments where id=$ui");
		// 		while($rw = mysqli_fetch_array($do)){
		// 			$ui = $rw['department_name'];
		// 		}

		//  echo "<td>$ui</td>";
		// echo "<td>".$row['school']."</td>";
		// echo "<td>".$row['department']."</td>";
		echo "<td>".$row['major']."</td>";
		echo "<td>".$row['gender']."</td>";
		
		
		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_student'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		echo "</tr>";
		$i++;


	}
?>