<?php 
extract($_POST);
if(isset($save))
{

	$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

	if($conn==true)
	 {
		$query="insert into semester_courses values('','$hg','$n','$a','$aas','$b','$c','$d','$ll',now())";
		mysqli_query($conn,$query);
	
	

		$err="<script>


  swal({
  title: 'Done!',
  text:'course succesfully added!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_semester_courses';
}, 4000);
;

</script>";
	
		//$err= "<font color='red'><h3 align='center'>This Course already Exists!!</h3></font>";
	 }
	  else
	 {
    $query="insert into semester_courses values('','$hg','$n','$a','$aas','$b','$c','$d','$ll',now())" or die("Failed to Add");
    mysqli_query($conn,$query);


    
	$err="<script>


  swal({
  title: 'Done!',
  text:'Course succesfully added!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_semester_courses';
}, 4000);
;

</script>";

}
}

?>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-top:60px">

	<caption><h2 align="center" style="">Add Course Timetable & Schedule</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
    
	<tr>
					<td>Evaluation Id</td>
					<Td><input type="text" name="hg" class="form-control" required>
                
					</td>
				</tr> 
				
                <tr>
					<td>Course Id</td>
					<Td><input type="text" name="n" class="form-control" required>
                
					</td>
				</tr> 
               
                <tr>
					<td>Course Name</td>
					<Td><input type="text" name="a" class="form-control" required>
					</td>
				</tr> 
				 <tr>
					<td>Credit Hours</td>
					<Td><input type="text" name="aas" class="form-control" required>
					</td>
				</tr> 
               
                <tr>
					<td>Lecture Group</td>
					<Td><input type="text" name="b" class="form-control" required>
					</td>
				</tr>


				<tr>
					<td>Department Offered</td>
					<Td><select name="c" class="form-control" required>
               <?php   
				include('dbconfig.php');
				$query = "SELECT * FROM hod where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					$yut ='<option value="'.$row['department'].'">'.$row['department'].'</option>';
					echo "$yut";
				}
				$yu = $yut;
				
               
                        ?>
					</select>
					</td>
				</tr>

                <tr>
					<td>Offered By</td>
					<Td><select name="d" class="form-control" required>
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


                $sql=mysqli_query($conn,"select * from faculty where department='$yu' ") or die('opps');
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['Name']."'>".$z['Name']."</option>";
                }
                        ?>
					</select>
					</td>
				</tr>

				<tr>
					<td>Lecturer Email</td>
					<Td><select name="ll" class="form-control" required>
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



                $sql=mysqli_query($conn,"select * from faculty where department='$yu'");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['email']."'>".$z['email']."</option>";
                }
                        ?>
					</select>
					</td>
				</tr>

<Td colspan="2" align="center">
<input type="submit" value="Add" class="btn btn-info" name="save"/>

				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>