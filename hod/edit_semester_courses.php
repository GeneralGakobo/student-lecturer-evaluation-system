<?php
	extract($_POST);
	if(isset($save))
	{	

	mysqli_query($conn,"update semester_courses set ref_id='$n',course_id	='$desg',course_name='$sem',credit_hours='$email', offered_by='$by',faculty_id='$ey' where id='".$_GET['id']."'");	


$err="<script>


  swal({
  title: 'Done!',
  text:'Course details succesfully updated!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_semester_courses';
}, 4000);
;

</script>";

	}

$con=mysqli_query($conn,"select * from semester_courses where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Semester Course</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>ref Id:</label>
            	<input type="text" value="<?php echo @$res['ref_id'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	

	   <div class="control-group form-group">
    	<div class="controls">
        	<label>course Name</label>
  <input type="text"  name="desg" value="<?php echo @$res['course_id'];?>" class="form-control" required>
        </div>
    </div>
              
	<div class="control-group form-group">
    	<div class="controls">
        	<label>course Name</label>
  <input type="text"  name="sem" value="<?php echo @$res['course_name'];?>" class="form-control" required>
        </div>
    </div>

	<div class="control-group form-group">
    	<div class="controls">
        	<label>Credit Hours</label>
  <input type="text"  name="email" value="<?php echo @$res['credit_hours'];?>" class="form-control" required>
        </div>
    </div>
              
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Lecture Group</label>
			<p style="color:orange">**you cannot update group!! alternatively delete this semester course and add it afresh!**
 </p>
  <input type=""  name="group" value="<?php echo @$res['group'];?>" class="form-control" required>
        </div>
    </div>
              
 	





	<div class="control-group form-group">
    	<div class="controls">
        	<label>Lecturer Name :</label>
            	<select name="by" class="form-control" required>
        

		<?php
                $sql=mysqli_query($conn,"select * from faculty");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['Name']."'>".$z['Name']."</option>";
                }
                        ?>
					</select>

    </div>
	</div>

	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Lecturer Email :</label>
            	<select name="ey" class="form-control" required>
        

		<?php
                $sql=mysqli_query($conn,"select * from faculty");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['email']."'>".$z['email']."</option>";
                }
                        ?>
					</select>

    </div>
	</div>
               
	


	<tr>
				
             



	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update Semester Course">
        </div>
  	</div>
	</form>


</div>