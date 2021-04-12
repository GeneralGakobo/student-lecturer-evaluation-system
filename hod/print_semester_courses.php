<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Delete This Record ?')
	 if(a)
     {
        window.location.href='delete_semester_courses.php?id='+id;
     }
}
</script>	

	
<tr>
<script>
	 function printpage()
	 {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
		window.print();
    }
</script>

	<td colspan="7" align="center">
	<button id="printpagebutton"  class="btn btn-primary" onClick="printpage()"><span class="glyphicon glyphicon-print"></span> &nbsp;Print</button>
	</td>
</tr>		

<?php
$user=$_SESSION['user'];
$query = "SELECT * FROM hod where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					$yut = $row['department'];
				}
				
				//  echo "$yut";  
	$yu = $yut;
	echo"<h3 align='center'>$yu Department</h3>";	


	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Ref Id</th>";
	echo "<th>Course Id</th>";
	echo "<th>Course Name</th>";
	echo "<th>Lecture Group</th>";
    echo "<th>Department Offered</th>";
    echo "<th>Offered By</th>";
	
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from semester_courses where department_offered='$yu' ORDER BY ref_id ASC");
	
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
		

		echo "</tr>";
		$i++;
	}
	
?>