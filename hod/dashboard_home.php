<?php

$user=$_SESSION['user'];
$query = "SELECT * FROM hod where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					$yut = $row['department'];
				}
				
				//  echo "$yut";  
	$yu = $yut;
	// echo"<h3 align='center'>$yu Department</h3>";


	$pan = "select * from departments where department_name='$yu' ";
	$run = mysqli_query($conn, $pan);
	while($ran = mysqli_fetch_array($run)){
		$dream = $ran['id'];
	}
	$mine = $dream;

    ?>

<h1 align="cente" style="text-decoration:underline"><a href="">HOD <?php echo "$yu"; ?> Dashboard</a></h1>
<ul>
<?php 
//all complaints
$qq=mysqli_query($conn,"select * from faculty where department='$yu' ");
$rows=mysqli_num_rows($qq);			
echo "<a href='dashboard.php?info=print_faculty'><h2 style='color:green'>Total Number of Faculty : $rows</h2></a>";	

//all emegency compalints
$q=mysqli_query($conn,"select * from user where department='$mine'");
$r1=mysqli_num_rows($q);			
echo "<a href='dashboard.php?info=print_student'><h2 style='color:orange'>Total Number of Student : $r1</h2></a>";	

//all Semester course groups
$qsd=mysqli_query($conn,"select * from semester_courses where department_offered='$yu' ");
$red=mysqli_num_rows($qsd);			
echo "<h2 style='color:black'>Total Number Semester Course Groups : $red</h2>";	

//expected reports

$qhj=mysqli_query($conn,"select * from user_selected_courses where department_offered='$yu' ");
$rop=mysqli_num_rows($qhj);			
echo "<h2 style='color:orange'>Expected Number of Reports : $rop</h2>";	


//all users
$q2=mysqli_query($conn,"select * from feed where department_offered='$yu' ");
$r2=mysqli_num_rows($q2);			
echo "<a href='dashboard.php?info=feedback'><h2 style='color:black'>Number of feedback given  : $r2</h2></a>";	

$percentage = round(($r2/$rop) * 100,1);
$ere= "$percentage%";
					
echo "<h2> Best department Lecturer</h2>";
?>

</ul>
<style type="text/css">

.outer{
    height:32px;
    radius:10%;
    width:500px;
    border:solid 1px #000000;
}
.inner{
    height:30px;
    width:<?php echo $percentage ?>%;
    border-right:solid 1px #000;
    background-color:lightblue;
}

</style>
<label style="margin-top:20px;">Evaluation Progress bar</label>
<?php echo "$ere"; ?>
<div class="outer">
<div class="inner"></div>
</div>
