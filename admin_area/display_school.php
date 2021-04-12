
<script>
function deletes(id){
	
swal({
  title: "Are you sure?",
  text: "Are you sure you want to delete this School?",
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
	   window.location.href='delete_school.php?id='+id;
	  }, 3000);
    swal("Poof! School has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your School is safe!");
  }
	},0)
});

}
</script>


<table class="table table-bordered">
	<tr>
		<form method="post" action="dashboard.php?info=search_school">
		<td colspan="8">
		<input type="text"  placeholder="Search School by school id or school name" name="searchGroup" class="form-control" required />
		</td>
		<td colspan="8">
		<input type="submit" value="Search School" name="sub" class="btn btn-success" />
		</td>
		</form>
	</tr>
	</table>

<?php
	


	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>School Id</th>";
	echo "<th>School Name</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from schools ORDER BY school_name ASC");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['school_id']."</td>";
        echo "<td>".$row['school_name']."</td>";
		
		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_school'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		echo "</tr>";
		$i++;
	}
	
?>