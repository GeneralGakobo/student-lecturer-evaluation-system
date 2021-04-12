

<?php 
 $con=mysqli_query($conn,"select * from user where email='$user'");

$res=mysqli_fetch_assoc($con);	 
    
$n= @$res['studentid'];


$user= $_SESSION['user'];
$q=mysqli_query($conn,"select * from user_selected_courses where student_id='$n'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
    $con=mysqli_query($conn,"select * from user where email='$user'");

    
$n= @$res['studentid'];
?>


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

	<p colspan="7" align="center">
	<button id="printpagebutton"  class="btn btn-primary" onClick="printpage()"><span class="glyphicon glyphicon-print"></span> &nbsp;Print</button>
	</p>
	<!-- <form method="post" action="export.php" align="center">
	<input type="submit" name="export" value="CSV Export" class="btn btn-success"/>
	</form> -->

<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Selected Courses</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<!-- <th>Ref Id</th> -->
		<th>Course Code</th>
		<th>Course Name</th>
		<th>Group</th>
        <th>Department Offered</th>
		<th>Lecturer Name</th>
		<!-- <th>Lecturer Email</th> -->
		</tr>
		</thead>
		
		<?php
		$i=1;

	$que=mysqli_query($conn,"select * from user_selected_courses where student_id='$n'");
	
	while($row=mysqli_fetch_array($que))
	{
        echo "<tr>";

        echo "<td>".$i."</td>";
        // echo "<td>".$row['ref_id']."</td>";
		echo "<td>".$row['course_id']."</td>";
        echo "<td>".$row['course_name']."</td>";
        echo "<td>".$row['group']."</td>";
        echo "<td>".$row['department_offered']."</td>";
        echo "<td>".$row['offered_by']."</td>";
        // echo "<td>".$row['faculty_id']."</td>";
		
		echo "</tr>";
		$i++;
		}
		
		?>
		
		
		
</table>
</div>
</div>
<?php }?>

