<?php 
$user= $_SESSION['user'];
$con=mysqli_query($conn,"select * from faculty where user_name='$user'");
// echo"$user";
$res=mysqli_fetch_assoc($con);
$fat = @$res['email'];
// echo "$fat";

$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from notifications where lecturer_email='$fat' and student_name='$search' or student_email='$search' or student_id='$search'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Records exists !!!</h2>";
}
else
{
?>

<script>
function deletes(id){
	
swal({
  title: "Are you sure?",
  text: "Are you sure you want to unblock this student?",
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
	   window.location.href='delete_major.php?id='+id;
	  }, 3000);
    swal("Poof! Student has been unblocked!", {
      icon: "success",
    });
  } else {
    swal("Your notification is safe!");
  }
	},0)
});

}
</script>



<h2 style="color:#00FFCC; text-decoration:underline" align="center" >Results Found</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="16"><a href="dashboard.php?info=block">Go Back to blocked Students Page</a></td>
	</tr>

<div class="row">

<div class="col-sm-12">

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<th>Time Blocked</th>
        <th>Student Id</th>
		<th>Student Name</th>
		<th>Student Email</th>
		<th>Course Code</th>
		<th>Course Name</th>
		<th>Group</th>
		
		<th>Lecturer Message</th>
		<th>Unblock</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_assoc($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['Date']."</td>";
            echo "<td>".$row['student_id']."</td>";
			echo "<td>".$row['student_name']."</td>";
			echo "<td>".$row['student_email']."</td>";
			echo "<td>".$row['course_id']."</td>";
			echo "<td>".$row['course_name']."</td>";
			echo "<td>".$row['group']."</td>";
			
			echo "<td>".$row['message']."</td>";

			echo "<td><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-lock' style=color:green;></span></a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
		
		
</table>
</div>
</div>
<?php }?>