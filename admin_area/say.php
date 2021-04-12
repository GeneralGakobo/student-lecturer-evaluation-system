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
		<form method="post" action="dashboard.php?info=search_say">
		<td colspan="8">
		<input type="text"  placeholder="Search Student" name="searchGroup" class="form-control" required />
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
	echo "<th>Add</th>";
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
		
		
		
        echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=class'><button type='submit' class='btn btn-success'>GO</button></a></td>";
		
		
		echo "</tr>";
		$i++;
	}
	
?>