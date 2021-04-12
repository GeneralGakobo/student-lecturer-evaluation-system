<?php 
extract($_POST);
if(isset($save))
{	
    
    mysqli_query($conn,"update user set  major='$major', mobile='$mob', school='$hob', department='$sem' where id='".$_GET['id']."'");	

    $err="<font color='green'>Student Details updated Succesfully</font>";
}

$con=mysqli_query($conn,"select * from user where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	    


?>
		
<h1 class="page-header">Update  Student Details</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
    <tr>
        	<label>Student Name:</label>
            	<input value="<?php echo @$res['name'];?>" class="form-control" required>
      </tr>
	
            
            <tr>
        	<label>Student Id:</label>
            	<input type="text" value="<?php echo @$res['studentid'];?>" class="form-control" required>
      </tr>

	  <tr>
        	<label>Student Email:</label>
            	<input type="email" value="<?php echo @$res['email'];?>" class="form-control" required>
            </tr>
	
		
      
				<tr>
				<label>Select your Major</label>
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
        	<label>Phone Number:</label>
            	<input type="text" value="<?php echo @$res['mobile'];?>" name="mob" class="form-control" required>
      </tr>
			
				<tr>
				<label>Select your School</label>
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
					<label>Select your Department</label>
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
               
			</tr>
        </tr>   	
		<tr>		
<Td colspan="2" align="center">
<input type="submit" style="margin-top:70px;" value="Save" class="btn btn-info" name="save"/>	</td>		
		</tr>
        </form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html> -->