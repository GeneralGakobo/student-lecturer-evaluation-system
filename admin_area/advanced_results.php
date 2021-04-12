<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest1) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output = $row['avg'];
}
// $sql = "select * from feed where ref_id='$search'";
// $result = mysqli_query($conn, $sql);
?>
<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest2) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output1 = $row['avg'];
}
?>
<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest3) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output2 = $row['avg'];
}
?>
<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest4) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output3 = $row['avg'];
}
?>
<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest5) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output4 = $row['avg'];
}
?>

<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest6) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output5 = $row['avg'];
}
?>

<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest7) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output6 = $row['avg'];
}
?>

<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest8) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output7 = $row['avg'];
}
?>

<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest9) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output8 = $row['avg'];
}
?>

<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest10) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output9 = $row['avg'];
}
?>

<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest11) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output10 = $row['avg'];
}
?>

<?php
$search=$_POST['searchGroup'];
$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest12) as avg from feed where ref_id='$search'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output11 = $row['avg'];
}
?>

<!-- <table class="table table-bordered"> -->
	<div class="nav">
<image src="images/ueab_logo.png" class="logo" style="margin-left:20px;margin-bottom:20px;margin-top:20px;float:left;">
<a class="navbar-brand"  style="color:#330066;margin-top:20px;">UEAB STUDENT-LECTURER EVALUATION SYSTEM <br> <br>    EXECUTIVE REPORT</a>
				</div>
				

	<!-- <tr>
		<td colspan="16"><a href="dashboard.php?info=wine">Go Back</a></td>
	</tr> -->
	<!-- <Tr class="ative"> -->
    

<?php
$search=$_POST['searchGroup'];
$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
$con=mysqli_query($conn,"select * from semester_courses where ref_id='$search'");

$res=mysqli_fetch_assoc($con);	
?>


      <label style="margin-left:40px;">Evaluation Ref Id :</label>
            	<input value="<?php echo @$res['ref_id'];?>"  name="ref_id" style="border:none;" required><br>
  
    <label style="margin-left:40px;"> Lecturer Name :
		</label>
            	<input value="<?php echo @$res['offered_by'];?>"  name="offered_by" style="border:none;" required><br>
     
    <label style="margin-left:40px;">	
		 Course Id :
		</label>
            	<input value="<?php echo @$res['course_id'];?>"  name="course_id" style="border:none;" required><br>
      
   <label style="margin-left:40px;">   Course Name :
		</label>
            	<input value="<?php echo @$res['course_name'];?>"  name="course_name" style="border:none;" required><br>
        
		
<label style="margin-left:40px;">	   Lecture Group :</label>
            	<input value="<?php echo @$res['group'];?>"  name="group" style="border:none;" required><br>
      
		
		
    <br>
    

<?php
$q2=mysqli_query($conn,"select * from user_selected_courses where ref_id='$search'");
$r2=mysqli_num_rows($q2);			
echo "<h4 style='color:black'>Number of student registered : $r2</h4>"; 	
?>

<?php
$q2=mysqli_query($conn,"select * from feed where ref_id='$search'");
$r2=mysqli_num_rows($q2);			
echo "<h4 style='color:black'>Number of student who provided feedback : $r2</h4>"; 	
?>
<br>

<?php	
echo "<h4 style='color:black'>Question 1 average : $output</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 2 average : $output1</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 3 average : $output2</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 4 average : $output3</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 5 average : $output4</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 6 average : $output5</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 7 average : $output6</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 8 average : $output7</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 9 average : $output8</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 10 average : $output9</h4>"; 	
?>
<?php	
echo "<h4 style='color:black'>Question 11 average : $output10</h4>"; 	
?>
<?php	
echo "<h4 style='color:black;margin-bottom:100px;'>Question 12 average : $output11</h4>"; 	
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



<div class="navbar-fixed-bottom nav text-center" style="height:40px; margin-bottom:20px;">
	<td colspan="7" align="center">
	<button id="printpagebutton"  class="btn btn-primary" onClick="printpage()"><span class="glyphicon glyphicon-print"></span> &nbsp;Print</button>
	</td>
    </div>