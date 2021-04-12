 
<script type="text/javascript">
function inserts(id)
{
	 a=confirm('Are You ready to evaluate this course lecturer?')
	 if(a)
     {
        window.location.href='selected_courses.php?id='+id;
     }
}
</script>	


<table class="table table-bordered">
	<tr>
		
		<form method="post" action="dashboard.php?info=advanced_results">
		<!-- <form method="post" action=""> -->
		
		<td colspan="8">

        <select name="searchGroup" placeholder="Search By Ref_id" class="form-control" required>
	<?php
	$sql=mysqli_query($conn,"select * from semester_courses");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['ref_id']."'>".$r['ref_id']."</option>";
	}
		 ?>
    </select>


		<!-- <input type="text"  placeholder="Search By lecturer Email" name="searchGroup" class="form-control" required /> -->
		</td>
		<td colspan="8">
		<input type="submit" value="Search Ref_Id" name="sub" class="btn btn-success" />
		</td>
		</form>
	</tr>
	</table>

<?php

 $conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	
	
		
	echo "<tr>";
		
	echo "<th>S.No</th>";
	echo "<th>ref_id</th>";
	echo "<th>course_id</th>";
	echo "<th>course_name</th>";
	echo "<th>group</th>";
	echo "<th>department_offered</th>";
	echo "<th>offered_by</th>";
    //echo "<th><span class='glyphicon glyphicon-arrow-down' style='color:green'> PROPOSE</span></th>";
	 echo "<th><span class='glyphicon glyphicon-check' style='color:green'>VIEW RESULTS</span></th>";

	echo "</tr>";


	
	$i=1;
	
	$que=mysqli_query($conn,"select * from semester_courses order by ref_id ASC");
	
	while($row=mysqli_fetch_array($que))
	{
		
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$row['ref_id']."</td>";
	echo "<td>".$row['course_id']."</td>";
	echo "<td>".$row['course_name']."</td>";
	echo "<td>".$row['group']."</td>";
	echo "<td>".$row['department_offered']."</td>";
	echo "<td>".$row['offered_by']."</td>";	

	echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=b'><button type='submit' class='btn btn-success'>GO</button></a></td>";
		
	echo "</tr>";
	$i++;
	}

		$i++;
	
	?> 
