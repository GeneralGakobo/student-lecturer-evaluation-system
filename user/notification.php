<?php 
$user= $_SESSION['user'];
$q=mysqli_query($conn,"select * from notifications where student_email='".$_SESSION['user']."'");
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
  text: "Once deleted, you will not be able to recover this notification!",
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
	   window.location.href='delete_note.php?id='+id;
	  }, 3000);
    swal("Poof! Your notification has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your notification is safe!");
  }
	},0)
});

}
</script>















<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Block Notifications</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<!-- <th>Time Blocked</th> -->
		<th>Course Code</th>
		<th>Course Name</th>
		<th>Group</th>
		<!-- <th>Lecturer Name</th>
		<th>Lecturer Email</th>
		<th>Lecturer Phone</th> -->
		<th>Lecturer Message</th>
		<!-- <th>Delete</th> -->
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_assoc($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			// echo "<td>".$row['Date']."</td>";
			echo "<td>".$row['course_id']."</td>";
			echo "<td>".$row['course_name']."</td>";
			echo "<td>".$row['group']."</td>";
			// echo "<td>".$row['lecturer_name']."</td>";
			// echo "<td>".$row['lecturer_email']."</td>";
			// echo "<td>".$row['lecturer_phone']."</td>";
			echo "<td>".$row['message']."</td>";

			// echo "<td><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
		
		
</table>
</div>
</div>
<?php }?>