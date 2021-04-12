<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$op=md5($op);	

$sql=mysqli_query($conn,"select * from user where pass='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$np=md5($np);
	$sql=mysqli_query($conn,"update user set pass='$np' where email='$user'");
	
	$err="<script>


  swal({
  title: 'Done!',
  text:'password updated succesfully',
  icon: 'success',
  
});

</script>
";



	}
	else
	{
	$err="<script>


  swal({
  title: 'Oops!',
  text:'password do not match',
  icon: 'warning',
  
});

</script>
";
	}
}

else
{

$err="<script>


  swal({
  title: 'Sorry!',
  text:'Wrong old password',
  icon: 'warning',
  
});

</script>
";
}
}
}

?>
<h2 align="center">Update Password</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	<div style="color:#330066">
	<div class="row" style="margin-top:10px;">
		<div class="col-sm-3" style="color:#330066;font-size:20px;">Enter Your Password</div>
		<div class="col-sm-4">
		<input type="password" name="op" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px;">
		<div class="col-sm-3" style="color:#330066;font-size:20px;" >Enter Your New Password</div>
		<div class="col-sm-4">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px;">
		<div class="col-sm-3" style="color:#330066;font-size:20px;">Confirm New Password</div>
		<div class="col-sm-4">
		<input type="password" name="cp" class="form-control"/></div>
	</div>

</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Update" name="save" style="margin-left:100px" class="btn btn-success"/>
		
		</div>
	</div>
</form>	