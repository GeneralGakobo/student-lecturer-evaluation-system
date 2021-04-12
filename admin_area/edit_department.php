<?php
	extract($_POST);
	if(isset($save))
	{	

	mysqli_query($conn,"update departments set department_id='$n',department_name='$desg',school='$e' where id='".$_GET['id']."'");	

$err="<script>


  swal({
  title: 'Done!',
  text:'Department Details succesfully updated!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_department';
}, 3000);
;

</script>";


	}

$con=mysqli_query($conn,"select * from departments where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Department</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Department Id:</label>
            	<input type="text" value="<?php echo @$res['department_id'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	

	   <div class="control-group form-group">
    	<div class="controls">
        	<label>Department Name</label>
  <input type="text"  name="desg" value="<?php echo @$res['department_name'];?>" class="form-control" required>
        </div>
    </div>

    
    <div class="control-group form-group">
    	<div class="controls">
        	<label>School Offered:</label>
            	<select name="e" class="form-control" required>


				
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
            	<input type="submit" class="btn btn-success" name="save" value="Update Department">
        </div>
  	</div>
	</form>


</div>