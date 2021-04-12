<?php
	extract($_POST);
	if(isset($save))
	{	

	mysqli_query($conn,"update faculty set Name='$n',designation	='$desg',mobile='$mob' where id='".$_GET['id']."'") or die('failed to update');

$err="<script>


  swal({
  title: 'Done!',
  text:'Faculty details succesfully updated!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=show_faculty';
}, 4000);
;

</script>";

	}

$con=mysqli_query($conn,"select * from faculty where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Faculty</h1>
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
 	



	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Faculty">
        </div>
  	</div>
	</form>


</div>