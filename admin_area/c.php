
<?php

$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
$con=mysqli_query($conn,"select * from faculty where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	
?>




<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest1) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$outputt = $row['avg'];
}
?>
<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest2) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output1 = $row['avg'];
}
?>
<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest3) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output2 = $row['avg'];
}
?>
<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest4) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output3 = $row['avg'];
}
?>
<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest5) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output4 = $row['avg'];
}
?>

<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest6) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output5 = $row['avg'];
}
?>

<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest7) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output6 = $row['avg'];
}
?>

<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest8) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output7 = $row['avg'];
}
?>

<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest9) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output8 = $row['avg'];
}
?>

<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest10) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output9 = $row['avg'];
}
?>

<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest11) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output10 = $row['avg'];
}
?>

<?php

$conn = mysqli_connect("localhost","root","","ueab") or die("db error!");
$query = "select AVG(quest12) as avg from feed where faculty_id='".$res['email']."'";
$query_result = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($query_result)){
$output11 = $row['avg'];
}
?>




<table class="table table-bordered">
	
	<image src="images/ueab_logo.png" class="logo" style="margin-left:20px;margin-bottom:20px;margin-top:20px;float:left;">
	<a class="navbar-brand"  style="color:#330066;margin-top:20px;">UEAB STUDENT-LECTURER EVALUATION SYSTEM <br> <br>    EXECUTIVE REPORT</a>
					
					
	
		<!-- <tr>
			<td colspan="16"><a href="dashboard.php?info=wine">Go Back</a></td>
		</tr> -->
		<!-- <Tr class="ative" style="margin-left:60px;"> -->
		<label style="padding-top:40px; float:right;">Semester: ...................</label>
	
	
		<tr>
		<th> Lecturer Email :</th>
			<td>
					<input value="<?php echo @$res['email'];?>"  name="email" class="form-control" required>
			</td>
			
			</div>
		</div>
	
		<th> Lecturer Name :</th>
			<td>
					<input value="<?php echo @$res['Name'];?>"  name="Name" class="form-control" required>
			</td>
			
			</div>
		</div>
	</tr>
		</table>
		<br>
		<br>
	
<div class="ytu" style="margin-left:50px;">
<?php
$q2=mysqli_query($conn,"select * from semester_courses where faculty_id='".$res['email']."'");
$r2=mysqli_num_rows($q2);			
echo "<h4 style='color:black'>Number of Course Groups : $r2</h4>"; 	
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





	<?php
	$q2=mysqli_query($conn,"select * from user_selected_courses where faculty_id='".$res['email']."'");
	$r2=mysqli_num_rows($q2);			
	echo "<h4 style='color:black'>Total number of students handling : $r2</h4>"; 	
	?>
	
	<?php
	$q2=mysqli_query($conn,"select * from feed where faculty_id='".$res['email']."'");
	$r2=mysqli_num_rows($q2);			
	echo "<h4 style='color:black'>Number of student who provided feedback : $r2</h4>"; 	
	?>
	<br>
	<br>
</div>
<div class="op" style="margin-left:120px;">
	
<?php	
echo "<h4 style='color:black'>Question 1 average : $outputt</h4>"; 	
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
	
	
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; margin-bottom:20px; background:#ffffff">
		<td colspan="7" align="center">
		<button id="printpagebutton"  class="btn btn-primary" onClick="printpage()"><span class="glyphicon glyphicon-print"></span> &nbsp;Print</button>
		</td>
		</div>