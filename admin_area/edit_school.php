<?php
	extract($_POST);
	if(isset($save))
	{	

	mysqli_query($conn,"update schools set school_id='$n',school_name='$desg' where id='".$_GET['id']."'");	


$err="<script>


  swal({
  title: 'Done!',
  text:'School Details succesfully updated!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_school';
}, 4000);
;

</script>";

	}

$con=mysqli_query($conn,"select * from schools where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  School</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>School Id:</label>
            	<input type="text" value="<?php echo @$res['school_id'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	

	   <div class="control-group form-group">
    	<div class="controls">
        	<label>School Name</label>
  <input type="text"  name="desg" value="<?php echo @$res['school_name'];?>" class="form-control" required>
        </div>
    </div>
              
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update School">
        </div>
  	</div>
	</form>


</div>