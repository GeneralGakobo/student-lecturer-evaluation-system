


<?php

$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
$con=mysqli_query($conn,"select * from semester_courses where id='".$_GET['id']."'");

$resy=mysqli_fetch_assoc($con);	
?>



<?php

	$user=$_SESSION['user'];
$query = "SELECT * FROM faculty where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					$yut = $row['Name'];
					$min = $row['email'];
				//   echo "$yut"; 
				}
				 
	$yu = $yut;
    // echo "$mine";
    $mmm = @$resy['course_name'];

	// $pan = "select * from departments where department_name='$yu' ";
	// $run = mysqli_query($conn, $pan);
	// while($ran = mysqli_fetch_array($run)){
	// 	$dream = $ran['id'];
	// }
	// $mine = $dream;



// echo "$yu";
// echo "$mine";
	
	echo "<h3 align='center'>$mmm</h3>";
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>S.No</th>";
	echo "<th>Student Id</th>";
	// echo "<th>Student Name</th>";
	// echo "<th>Student Email</th>";
	// echo "<th>Student Name</th>";
	// echo "<th>Mobile</th>";
	//  echo "<th>school</th>";
	//  echo "<th>Department</th>";
	// echo "<th>Student Major</th>";
	echo "<th>Block</th>";
	// echo "<th>Update</th>";
	// echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
$mine= $min;
// echo "$mine";
	$quet=mysqli_query($conn,"select * from user_selected_courses where faculty_id='$mine' and ref_id='".$resy['ref_id']."' ");
	
	while($row=mysqli_fetch_array($quet))
	{
	echo "<tr>";
		echo "<td>".$i."</td>";
		// echo "<td>".$row['name']."</td>";
		echo "<td>".$row['student_id']."</td>";
        // $jaja = @$row['student_id'];

        // $quetii=mysqli_query($conn,"select * from user where studentid='$jaja' ");
        // while($row=mysqli_fetch_array($quetii)){
        //     echo "<td>".$row['name']."</td>";
        //     echo "<td>".$row['email']."</td>";
        //     echo "<td>".$row['major']."</td>";
        // }
        // echo "$jaja";
		// echo "<td>".$row['email']."</td>";
		// echo "<td>".$row['pass']."</td>";
		// echo "<td>".$row['mobile']."</td>";
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
		// echo "<td>".$row['major']."</td>";
		// echo "<td>".$row['gender']."</td>";
		
		
		
		// echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_student'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		 echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=ssblock' ><span class='glyphicon glyphicon-lock' style=color:red;></span></a></td>";
		
		
		echo "</tr>";
		$i++;


	}
?>