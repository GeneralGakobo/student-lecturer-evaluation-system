<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['faculty_login']=$e;
header('location:faculty');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-4" style="margin-top:60px"><h2>Faculty Login</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px; margin-left:150px">
		<div class="col-sm-1">Email</div>
		<div class="col-sm-4">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px; margin-left:150px">
		<div class="col-sm-1" style="margin-top:15px;">Password</div>
		<div class="col-sm-5">
		<input type="password" name="p" id="pass" class="form-contro"><btn id="btn"><i class="fa fa-eye-slash" style="margin:10px;color:green;zoom:1.5;"></i></button></div>
	</div>

	<a href="#"><p style="margin-left:400px;margin-top:5px;">Forgot Password?</p></a>


	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-info"/>
		
		</div>
	</div>
</form>	
</div>
</div>
<script src="showpass.js"></script>