<script src="../css/sweet.js"></script>
	<script src="../css/jquery.min.js"></script>
<!-- 	
		<script>
$(document).ready(function(){

$('#schools').on('change',function(){
	var schoolsID = $(this).val();
	if(schoolsID){
		$.get(
			"ajax.php",
			{schools: schoolsID},
			function(data){
				$('#departments').html(data);
			}
		);
	}else{
		$('#departments').html('<option>Select School First</option>')
	}
});


});

</script> -->



<?php
error_reporting(1);
	include('../dbconfig.php');
	$user=$_SESSION['user'];
	extract($_POST);
	if(isset($save))
	{	
		if(strlen($mob)<10 || strlen($mob)>10)
		{
		$err="<font color='red'>Mobile number must be 10 digit</font>";
		}
		else
		{
		//for auto genrate Password
		
		$x=rand(1,99);
		$p= md5($x);
		$pass=substr($p,1,6);
		
		//for user_alias
		$temp=substr($sem,0,4);
		$temp1=substr($name,0,4);
		$temp2=substr($mob,4,7);
		$user_name=$temp.$temp1.$temp2;
		
$q=mysqli_query($conn,"select * from faculty where email='$email'");
	$r=mysqli_num_rows($q);	
	if($r)
	{
	$err="<font color='red'>This email already exists choose diff email.</font>";
	}
	else
	{	


		//encrypt your password


		mysqli_query($conn,"insert into faculty values('','$user_name','$name','$Designation','$prg','$sem','$email','$pass','$mob',now(),'0')") or die("ERROR! NOT ADDED");
		
	$subject ="New User Account Creation";
	$from="davidgakobo5@gmail.com";
	$message ="User name: ".$user_name."Email:".$email." Password: ".$pass;
    $headers = "From:".$from;
    mail($email,$subject,$message,$headers);
		
	$err="<script>


  swal({
  title: 'Done!',
  text:'New faculty added succesfully!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=show_faculty';
}, 4000);
;

</script>";
	}
	}
}	

?>

	 


<h1 class="page-header">Add Faculty</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$name;?>" name="name" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<input type="text" value="<?php echo @$Designation;?>" name="Designation" class="form-control" required>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$email;?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	<!-- <div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
            	<input type="password" value=""  name="pass" class="form-control" required>
        </div>
    </div> -->
	<div class="display display-none" style="display:none">
	<div class="control-group form-group">
    	<div class="controls">
	<tr>
					<label>School:</label>
					<Td><select name="prg" id="schools" class="form-control" required>
                <?php   
				include('dbconfig.php');
				$query = "SELECT * FROM hod where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					echo '<option value="'.$row['school'].'">'.$row['school'].'</option>';
				}
               
                        ?>
					</select>
					</td>
				</tr> 
				</div>
				</div>
               

				<div class="control-group form-group">
    	<div class="controls">
                <tr>
					<label>Department:</label>
					<Td><select name="sem" id="departments" class="form-control" required>
  <?php   
				include('dbconfig.php');
				$query = "SELECT * FROM hod where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					echo '<option value="'.$row['department'].'">'.$row['department'].'</option>';
				}
               
                        ?>


					</select>
					</td>
				</tr> 
				</div>
				</div>
</div>

	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$mob;?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Add New Faculty">
        </div>
  	</div>
	</form>


</div>