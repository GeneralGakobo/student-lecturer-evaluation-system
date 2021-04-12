<?php
	extract($_POST);
	if(isset($save))
	{	

	mysqli_query($conn,"update admin set admin_email='$n',password='$sem' where id='".$_GET['id']."'");	

$err="<font color='green'>Admin Details updated</font>";

	}

$con=mysqli_query($conn,"select * from admin where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Admin</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Admin Email:</label>
            	<input type="text" value="<?php echo @$res['admin_email'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	

	    

	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password:</label>
            	<input type="text" value="<?php echo @$res['password'];?>" name="sem" class="form-control" required>
        </div>
   	</div>
 	

	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update Admin">
        </div>
  	</div>
	</form>


</div>