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
					
				//   echo "$yut"; 
				}
				 
	$yu = $yut;
				echo"<h3 align='center'>$yu Department</h3>";

	$pan = "select * from departments where department_name='$yu' ";
	$run = mysqli_query($conn, $pan);
	while($ran = mysqli_fetch_array($run)){
		$dream = $ran['id'];
	}
	$mine = $dream;
	



	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
    echo "<th>S.No</th>";
    echo "<th>Studentid</th>";
	echo "<th>Name</th>";
	
	
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from user where department='$mine' ORDER BY studentid ASC");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['studentid']."</td>";
		echo "<td>".$row['name']."</td>";
		
		echo "</tr>";
		$i++;
	}
	
?>

