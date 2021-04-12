<?php
	extract($_POST);
	if(isset($save))
	{	

	mysqli_query($conn,"update hod set Name='$n',designation	='$desg',department='$prg',mobile='$mob', school='$pass' where id='".$_GET['id']."'") or die('failed to update');


$err="<script>


  swal({
  title: 'Done!',
  text:'HOD Details succesfully updated!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_hod';
}, 4000);
;

</script>";


	}

$con=mysqli_query($conn,"select * from hod where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  HOD</h1>
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
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
              

	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<input type="text" value="<?php echo @$res['designation'];?>" name="desg" class="form-control" required>
        </div>
   	</div>
 	
	 
	<div class="control-group form-group" style="display:none">
    	<div class="controls">
        	<label>Email :</label>
			<p style="color:orange">**Cannot update email,Since it is the primary key**</p>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>School:</label>
            	<select name="pass" class="form-control" required>		
		<?php
                $sql=mysqli_query($conn,"select * from schools");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['school_name']."'>".$z['school_name']."</option>";
                }
                        ?>
					</select>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Department:</label>
            	<select name="prg" class="form-control" required>
        

		<?php
                $sql=mysqli_query($conn,"select * from departments");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['department_name']."'>".$z['department_name']."</option>";
                }
                        ?>
					</select>

    </div>
	</div>


	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  HOD">
        </div>
  	</div>
	</form>


</div>