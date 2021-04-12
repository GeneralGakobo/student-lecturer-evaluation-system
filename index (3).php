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
                <image src="images/ueab_logo.png" class="logo" float="left">
                <a style="color:#330066" href="gakobowasoweto@gmail.com">.</a>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">UEAB INTERNS <br>MANAGEMENT SYSTEM</a>
				</div>

                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
				
	
          
          <li style="color:#FFFFFF"><a style="color:#FFFFFF" href="index.php?info=login"><i class="fa fa-user fa-fw"></i>Student</a></li>
		  <li style="color:#FFFFFF"><a style="color:#FFFFFF" href="index.php?info=faculty_login"><i class="fa fa-group fa-fw"></i>Faculty</a></li> 
          <li style="color:#FFFFFF"><a style="color:#FFFFFF" href="admin"><i class="fa fa-gear fa-fw"></i>Admin</a></li> 
 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
        
        <?php }  ?>

<div class="body" style="background-image:url('images/q.jpg');size:contain;background-size:cover;">
            <div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
        </div>
        </div>

    <?php }  ?>

	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#330066">
    <a style="color:#330066;float:left;" href="admin">000</a>
    
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
