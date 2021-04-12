<?php 
extract($_POST);
if(isset($save))
{

	$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

	$sql=mysqli_query($conn,"select * from user_selected_courses where student_id='$n' and course_id='$p'");
	$r=mysqli_num_rows($sql);
   
	if($r==true)
	 {
		$err= "<font color='red'><h3 align='center'>This course already Exists to that Student</h3></font>";
	}
	else
	{
   
// $quer="insert into evaluate_courses values('','$hg','$n','$p','$pro','$mob','$sem','$hob','$gen',now())";
$query="insert into user_selected_courses values('','$hg','$n','$p','$pro','$mob','$sem','$hob','$gen',now())";
mysqli_query($conn,$query);
// mysqli_query($conn,$quer);

//upload image


$err="<font color='blue'><h3 align='center'>Course Added successfull !!<h3></font>";

}

}

?>

<?php
$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
$con=mysqli_query($conn,"select * from semester_courses where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	
?>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-top:60px">

	<caption><h2 align="center" style="">Add Courses to a Student</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<tr>
				<tr>
					<td>Evaluation Ref Id</td>
					<Td><input  type="text" name="hg" value="<?php echo @$res['ref_id'];?>" class="form-control" required/></td>
				</tr> 

				
				<tr>
					<td>Student Id</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr> 
			
            	

                <tr style="display:none;">
					<td>Course Id</td>
                    <td>
            	<input type="text" value="<?php echo @$res['course_id'];?>"  name="p" class="form-control" required>
        </td>
				</tr> 
               
                <tr style="display:none;">
					<td>Course Name</td>
                    <td>
            	<input type="text" value="<?php echo @$res['course_name'];?>"  name="pro" class="form-control" required>
        </td>
				</tr> 

				<tr style="display:none;">
					<td>Lecture Group </td>
                    <td>
            	<input type="text" value="<?php echo @$res['group'];?>"  name="mob" class="form-control" required>
        </td>
				</tr>
				
			
				<tr style="display:none;">
					<td>Department Offered</td>
                    <td>
            	<input type="text" value="<?php echo @$res['department_offered'];?>"  name="sem" class="form-control" required>
        </td>
				</tr>

			
                <tr style="display:none;">
					<td>Lecturer Name</td>
                    <td>
            	<input type="text" value="<?php echo @$res['offered_by'];?>"  name="hob" class="form-control" required>
        </td>
				</tr>
				
				
                <tr style="display:none;">
					<td>Lecturer Email</td>
                    <td>
            	<input type="text" value="<?php echo @$res['faculty_id'];?>"  name="gen" class="form-control" required>
        </td>
				</tr>
						
<Td colspan="2" align="center">
<input type="submit" value="Save" class="btn btn-info" name="save"/>

				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html> 