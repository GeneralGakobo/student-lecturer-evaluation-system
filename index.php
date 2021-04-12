<?php
session_start();
 require('dbconfig.php'); ?>

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
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:user');
}

else
{

$err="<font color='red'>Invalid Login details</font>";

}
}
}


?>
<?php
    @$info=$_GET['info'];
    if($info!="")
    {

        if($info=="registration")
        {
            include('registration.php');
        
        }

        if($info=="reset_pass")
        {
            include('reset_pass.php');
        }
    }
    else
    {
        ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/ueab_logo.png">
	<title>UEAB STUDENT-LECTURER EVALUATION SYSTEM</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/3d image.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#330066" padding-bottom="10mm">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <image src="images/ueab_logo.png" class="logo" style="float:left; margin:10px">
                <a style="color:#330066" href="gakobowasoweto@gmail.com">.</a>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF;margin:20px;">UEAB STUDENT-LECTURER <br>EVALUATION SYSTEM</a>
				
				
            </div>
           
         </div>
     </nav>


<div style="background-image:url('images/q.jpg');size:contain;background-size:cover;">
            <div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-4" style="margin-top:100px;color:#ffffff"><h2>Student Login</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:30px; margin-left:150px;color:#ffffff;">
		<div class="col-sm-1">Email</div>
		<div class="col-sm-4">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px; margin-left:150px;color:#ffffff;">
		<div class="col-sm-1">Password</div>
		<div class="col-sm-4">
        <input type="password" id="pass" name="p" class="form-control">
        
		
        </div>
        <btn id="btn"><i class="fa fa-eye-slash" style="color:aqua;zoom:1.5;"></i></button>
	</div>
    <a href="index.php?info=reset_pass"><p style="margin-left:300px;margin-top:5px;color:#ffffff;font-size:large;">Forgot Password?</p></a>

	
	<div class="row" style="margin-top:30px;">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn" style="font-weight:800;background-color:#ffffff;color:#330066;font-size:large;"/>
		
		</div>
	</div>
	<a href="index.php?info=registration"><p style="margin-left:300px;margin-top:45px;color:#ffffff;font-size:large;">Register Here!</p></a>
        <p style="margin-top:63px;">.</p>
</form>	
</div>
</div>
</div>

    <?php }  ?>

	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:25px;height:100px; background:#330066">
    
    
        <span style="color:#FFFFFF">Developed By &nbsp; <i class="fa fa-phone fa-fw"></i><a href="https://api.whatsapp.com/send?phone=+254798517161" target="1">Gakobo David</span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<script src="showpass.js"></script>
</body>

</html>