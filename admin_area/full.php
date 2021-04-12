
<table class="table table-bordered">
	<tr>
		<form method="post" action="dashboard.php?info=search_lec">
		<td colspan="8">

        <select name="searchGroup" placeholder="Search By lecturer Email" class="form-control" required>
	<?php
	$sql=mysqli_query($conn,"select * from faculty");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['email']."</option>";
	}
		 ?>
    </select>


		<!-- <input type="text"  placeholder="Search By lecturer Email" name="searchGroup" class="form-control" required /> -->
		</td>
		<td colspan="8">
		<input type="submit" value="Search Lecturer" name="sub" class="btn btn-success" />
		</td>
		</form>
	</tr>
	</table>

    
<?php
	


	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th><span class='glyphicon glyphicon-check' style='color:green'>VIEW RESULTS</span></th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from faculty ORDER BY Name ASC");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['email']."</td>";
		
		
	echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=c'><button type='submit' class='btn btn-success'>GO</button></a></td>";
	
		echo "</tr>";
		$i++;
	}
	
?>