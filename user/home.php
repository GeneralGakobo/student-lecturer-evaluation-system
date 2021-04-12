<h1 align="left" style="text-decoration:underline"><a href="#">Student Dashboard</a></h1>
<ul>
<?php 
$user= $_SESSION['user'];

 $con=mysqli_query($conn,"select * from user where email='$user'");

$res=mysqli_fetch_assoc($con);	 
    
$n= @$res['studentid'];


//all complaints
$qq=mysqli_query($conn,"select * from user_selected_courses where student_id='$n' ");
$rows=mysqli_num_rows($qq);			
echo "<a href='index.php?info=selected_courses'><h2 style='color:green'>Total Number of Selected Courses : $rows</h2></a>";	

//all emegency compalints
$q=mysqli_query($conn,"select * from feed where student_email='$user'");
$r1=mysqli_num_rows($q);			
echo "<a href='index.php?info=view_evaluated_courses'><h2 style='color:orange'>Total Number of Evaluated Courses : $r1</h2></a>";	


//all users
$q2=mysqli_query($conn,"select * from notifications where student_email='$user' and active = 1");
$r2=mysqli_num_rows($q2);			
echo "<a href='index.php?info=notification'><h2 style='color:black'>Total Number of Block Notifications  : $r2</h2></a>";	

$percentage = round(($r1/$rows) * 100,1);
$ere= "$percentage%";
					

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