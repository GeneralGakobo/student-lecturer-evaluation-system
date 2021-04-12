<?php 
$user= $_SESSION['user'];
$con=mysqli_query($conn,"select * from faculty where user_name='$user'");
// echo"$user";
$res=mysqli_fetch_assoc($con);
$fat = @$res['email'];
// echo "$fat";

$q=mysqli_query($conn,"select * from notifications where lecturer_email='$fat'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<!-- 

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_note.php?id='+id;
     }
}
</script>	
 -->




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
		<input type="text"  placeholder="Search Student by name,email or student id" name="searchGroup" class="form-control" required />
		</td>
		<td colspan="8">
		<input type="submit" value="Search Student" name="sub" class="btn btn-success" />
		</td>
		</form>
	</tr>
	</table>



<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Blocked Students</h1>
	</div>
</div>
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