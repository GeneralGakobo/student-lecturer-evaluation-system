
<!-- <table class="table table-bordered"> -->
	<div class="nav">
<image src="images/ueab_logo.png" class="logo" style="margin-left:130px;margin-bottom:20px;margin-top:20px;float:left;">
<a class="navbar-brand"  style="color:#330066;margin-top:20px;">UEAB STUDENT-LECTURER EVALUATION SYSTEM <br> <br>    LECTURER REPORT</a>
				</div>
				

	<!-- <tr>
		<td colspan="16"><a href="dashboard.php?info=wine">Go Back</a></td>
	</tr> -->
	<!-- <Tr class="ative"> -->
    

<?php

$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
$con=mysqli_query($conn,"select * from faculty where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	
?>


      <label style="margin-left:40px;margin-top:30px;">Lecturer Name :</label>
            	<input value="<?php echo @$res['Name'];?>"  name="ref_id" style="border:none;" required><br>
  <label style="float:right;margin-right:30px;">Semester :--------------------------</label>
    <label style="margin-left:40px;"> Lecturer Email :
		</label>
            	<input value="<?php echo @$res['email'];?>"  name="offered_by" style="border:none;" required><br>
     
    <label style="margin-left:40px;">	
		 School :
		</label>
            	<input value="<?php echo @$res['school'];?>"  name="course_id" style="border:none;" required><br>
      
   <label style="margin-left:40px;">   Department :
		</label>
            	<input value="<?php echo @$res['department'];?>"  name="course_name" style="border:none;" required><br>
        
		

                <br>
      
		
		
    <br>
    
    <div class="yuiy" style="margin-left:250px;">

<?php
$q2=mysqli_query($conn,"select * from semester_courses where faculty_id='".$res['email']."'");
$r2=mysqli_num_rows($q2);			
echo "<h4 style='color:black'>Number of Course Groups : $r2</h4>"; 	
?>

<?php
$q2=mysqli_query($conn,"select * from user_selected_courses where faculty_id='".$res['email']."'");
$r2=mysqli_num_rows($q2);			
echo "<h4 style='color:black'>Number of Total Students : $r2</h4>"; 	
?>
<?php
$query = "select SUM(credit_hours) as sum from semester_courses where faculty_id='".$res['email']."'";
// $query=mysqli_query($conn,"SELECT SUM(credit_hours) as sum from semester_courses");
$query_result = mysqli_query($conn, $query);
// $r2=mysqli_num_rows($q2);	
while($row=mysqli_fetch_assoc($query_result)){
$output = $row['sum'];	
}	
echo "<h4 style='color:black'>Number of Total Credit Hours : $output</h4>"; 
	
?>
<br>
</div>


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


<?php
	


	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	// echo "<th>Ref Id</th>";
	echo "<th>Course Code</th>";
	echo "<th>Course Name</th>";
	echo "<th>Credit Hours</th>";
	echo "<th>Lecture Group</th>";
	echo "<th>Student NO.</th>";
    echo "<th>Lecture Time</th>";
	

	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from semester_courses where faculty_id='".$res['email']."' ORDER BY course_name ASC");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		// echo "<td>".$row['ref_id']."</td>";
		echo "<td>".$row['course_id']."</td>";
        echo "<td>".$row['course_name']."</td>";
		echo "<td>".$row['credit_hours']."</td>";
        echo "<td>".$row['group']."</td>";
		
		$q2=mysqli_query($conn,"select * from user_selected_courses where faculty_id='".$res['email']."' and ref_id='".$row['ref_id']."'");
		$r2=mysqli_num_rows($q2);	


		 echo "<td>$r2</td>";
	
		echo "<td> </td>";


		$i++;
	}
	echo "</tr>";
?>
</table>
<div class="navbar-fixed-bottom nav text-center" style="height:40px; margin-bottom:20px;">
	<td colspan="7" align="center" style="padding-top:50px;">
	<button id="printpagebutton"  class="btn btn-primary" onClick="printpage()"><span class="glyphicon glyphicon-print"></span> &nbsp;Print</button>
	</td>
    </div>

