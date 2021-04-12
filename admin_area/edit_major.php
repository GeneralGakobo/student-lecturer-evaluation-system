<?php
	extract($_POST);
	if(isset($save))
	{	

	mysqli_query($conn,"update majors set major_id='$n',major_name	='$desg',school_offered='$sem',department_offered='$email' where id='".$_GET['id']."'");	

$err="<font color='green'>Major Details updated</font>";

	}

$con=mysqli_query($conn,"select * from majors where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Major</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Major Id:</label>
            	<input type="text" value="<?php echo @$res['major_id'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	

	   <div class="control-group form-group">
    	<div class="controls">
        	<label>Major Name</label>
  <input type="text"  name="desg" value="<?php echo @$res['major_name'];?>" class="form-control" required>
        </div>
    </div>
              

	<div class="control-group form-group">
    	<div class="controls">
        	<label>School Offered:</label>
            	<select name="sem" class="form-control" required>


				
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
        	<label>Department Offered :</label>
            	<select name="email" class="form-control" required>
        

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
	<tr>
				
             



	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update Major">
        </div>
  	</div>
	</form>


</div>