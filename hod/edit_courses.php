<?php
	extract($_POST);
	if(isset($save))
	{	

	mysqli_query($conn,"update courses set course_id='$n',course_name	='$desg',credit_hours='$sem' where id='".$_GET['id']."'");	

$err="<font color='green'>Courses Details updated</font>";

	}

$con=mysqli_query($conn,"select * from courses where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Course</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>course_id:</label>
            	<input type="text" value="<?php echo @$res['course_id'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	

	   <div class="control-group form-group">
    	<div class="controls">
        	<label>Course Name</label>
  <input type="text"  name="desg" value="<?php echo @$res['course_name'];?>" class="form-control" required>
        </div>
    </div>
              
<div class="control-group form-group">
    	<div class="controls">
        	<label>Credit Hours</label>
  <input type="text"  name="sem" value="<?php echo @$res['credit_hours'];?>" class="form-control" required>
        </div>
    </div>
	
 	

	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update Course">
        </div>
  	</div>
	</form>


</div>