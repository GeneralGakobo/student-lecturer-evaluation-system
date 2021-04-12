<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Delete This Administrator ?')
	 if(a)
     {
        window.location.href='delete_admin.php?id='+id;
     }
}
</script>	



<?php
	


	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Admin Email</th>";
	echo "<th>Password</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from admin");
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['admin_email']."</td>";
        echo "<td>".$row['password']."</td>";
		
		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_admin'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		

		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		echo "</tr>";
		$i++;
	}
	
?>
