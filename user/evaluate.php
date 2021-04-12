
<?php 
$user= $_SESSION['user'];
 $con=mysqli_query($conn,"select * from user where email='$user'");

$res=mysqli_fetch_assoc($con);	 
    
$n= @$res['studentid'];
$q=mysqli_query($conn,"select * from user_selected_courses where student_id='$n'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records of selected courses found ! </h3>";
}
else
{
?>


  


<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Selected Courses</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<!-- <th>Ref Id</th> -->
		<th>Course Code</th>
		<th>Course Name</th>
		<th>Group</th>
        <th>Department Offered</th>
		<th>Lecturer Name</th>
		<th><span class='glyphicon glyphicon-check' style='color:green'>EVALUATE</span></th>
		<!-- <th>DONE?</th> -->
		</tr>
		</thead>


<?php
$i=1;
	
while($row=mysqli_fetch_assoc($q))
	{
		 $ty=$row['ref_id']; 
	echo "<tr>";
	echo "<td>".$i."</td>";
	// echo "<td>".$row['ref_id']."</td>";
	echo "<td>".$row['course_id']."</td>";
	echo "<td>".$row['course_name']."</td>";
	echo "<td>".$row['group']."</td>";
	echo "<td>".$row['department_offered']."</td>";
	echo "<td>".$row['offered_by']."</td>";




	// if($row['EVALUATE'])
	// {
	// echo "<td><a href='index.php?page=feedback' onclick='inserts($row[idy])' user_id=".$row['S.NO']."&EVALUATE=".$row['group']."'><span class='glyphicon glyphicon-check' style=color:red;></span></a></td>";
	// }
	// else
	// {
	// echo "<td><a href='index.php?page=feedback' onclick='inserts($row[idy])' user_id=".$row['S.NO']."&EVALUATE=".$row['group']."'><span class='glyphicon glyphicon-check' style=color:green;></span></a></td>";
	// }

	// echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_faculty'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
// echo "<a hef="#" onclick='deletes($row[id])'>"
	  echo "<td class='text-center'><a href='index.php?id=$row[id]&info=check' ><button type='submit' class='btn btn-success'>GO</button></a></td>";
	
		//  echo "<td class='text-center'><a href='#' onclick='deletes($row[id])' ><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
	// echo "<td><input type='radio'></button></td>";
	 // </a>


	// echo "<td class='text-center'>
    // <a href='index.php?page=feedback','index.php?page=complete' onclick='inserts($row[id])'><button type='submit' class='btn btn-success'>GO</button></a>
	// </td>";
		
	echo "</tr>";
	$i++;
	
	}


		// @$page=  $_GET['page'];
		// if($page!="")
		// {
		// 	if($page=="feedback")
		//   {
		// 	  include('give_feedback.php');
		  
		//   }
		//   if($page=="complete")
		//   {
		// 	  include('complete.php');
		  
		//   }
		//   else{

		//   }

		// }
	
		$i++;
		
		
		?>

		
		<?php } ?>
		 


<?php
$dad= mysqli_query($conn, "select * from feed where student_id='$n'");
	$mum= mysqli_num_rows($dad);
	while($rre=mysqli_fetch_assoc($dad)){
		echo "<table>";
		echo "<tr>";
			echo "<td>".$rre['course_id']."<span class='glyphicon glyphicon-check' style= color:green;></span></td>";

		echo "</tr>";
		echo "</table>";
	
	}
		 
?>