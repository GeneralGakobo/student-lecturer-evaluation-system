<?php 
extract($_POST);
if(isset($save))
{	
    
    mysqli_query($conn,"update user set  mobile='$major' where email='$user'");	

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
        	<label>Update Phone</label>
            
    
		<h3>Current Phone No.<input value="<?php echo @$res['mobile'];?>" class="form-control" required></h3>

<h3>Input New Phone No.</h3>
<input type="text" name="major" class="form-control" required>
                </tr>

                <tr>		
<Td colspan="2" align="center">
<input type="submit" style="margin-top:70px;" value="Update" class="btn btn-info" name="save"/>	</td>		
		</tr>
			