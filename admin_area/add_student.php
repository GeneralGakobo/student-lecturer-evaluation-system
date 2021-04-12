<?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{

//image
$imageName=$_FILES['img']['name'];

//encrypt your password
$pass=md5($p);

$query="insert into user values('','$n','$e','$pass','$pro','$major','$mob','$hob','$sem','$gen','$imageName',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}

?>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-top:60px">

	<caption><h2 align="center" style="">Registration Form</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr> 

				<tr>
					<td>Enter Your email </td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password" name="p" class="form-control" required/></td>
				</tr>

				<tr>
					<td>Enter Your Student id </td>
					<Td><input type="text" name="pro" class="form-control" required/></td>
				</tr>


				<tr>
				<td>Select your Major</td>
					<Td><select name="major" class="form-control" required>
                <?php
                $sql=mysqli_query($conn,"select * from majors");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['major_name']."'>".$z['major_name']."</option>";
                }
                        ?>
					</select>
					</td>
				</tr> 
			

				<tr>
					<td>Enter Your Mobile </td>
					<Td><input type="text" name="mob" class="form-control" required/></td>
				</tr>
				
				<tr>
				<td>Select your School</td>
					<Td><select name="hob" class="form-control" required>
                <?php
                $sql=mysqli_query($conn,"select * from schools");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['school_name']."'>".$z['school_name']."</option>";
                }
                        ?>
					</select>
					</td>
				</tr> 
               

				<tr>
					<td>Select your Departmrnt</td>
					<Td><select name="sem" class="form-control" required>
                <?php
                $sql=mysqli_query($conn,"select * from departments");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['department_name']."'>".$z['department_name']."</option>";
                }
                        ?>
					</select>
					</td>
				</tr> 
               
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m"/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>	
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input type="file" name="img" class="form-control" required/></td>
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