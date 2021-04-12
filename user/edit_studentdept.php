<?php 
extract($_POST);
if(isset($save))
{	
    
    mysqli_query($conn,"update user set  department='$major' where email='$user'");	

    $err="<font color='green'>Student Details updated Succesfully</font>";
}

$con=mysqli_query($conn,"select * from user where email='$user'");

$res=mysqli_fetch_assoc($con);	    
?>

		
<h1 class="page-header" style="color:#330066">Student Details</h1>
<div class="col-lg-8">
	<form method="post">
   
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>

       <tr>
        	<label>Update Department</label>
            
    
		<h3>Current Department<input value="<?php echo @$res['department'];?>" class="form-control" name="major" required></h3>

<h3>Select New Department</h3>
        <Td><select name="major" class="form-control" required>
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

                <tr>		
<Td colspan="2" align="center">
<input type="submit" style="margin-top:70px;" value="Update" class="btn btn-info" name="save"/>	</td>		
		</tr>
			