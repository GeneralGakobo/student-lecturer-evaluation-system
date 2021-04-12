 <?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'") or mysqli_die("nop");

$r=mysqli_num_rows($sql);

if($r==false)
{
    	$err="<script>


  swal({
  title: 'Oops!',
  text:'This user does not exist!!',
  icon: 'warning',
  
});

</script>
";
}
else
{
    
$query="insert into resetpass values('','$e',now())"or mysqli_die("vop");
mysqli_query($conn,$query);


    	$err="<script>


  swal({
  title: 'Done!',
  text:'Password reset link sent to your email!!',
  icon: 'success',
  button: 'Login',
  
})
setTimeout(function(){
window.location.href='index.php';
}, 4000);
;

</script>
";

// $err= "<h3 align='center'>Click Here to <a href='index.php'>Login</a></h3>";


}
}

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
    <script src="css/sweet.js"></script>
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
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">UEAB STUDENT-LECTURER <br>EVALUATION SYSTEM</a>
				
				
            </div>
           
         </div>
         </nav>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-top:60px">

	<caption><h2 align="center" style="">Password Reset</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				</tr>
                </table>
                <Td colspan="2" align="center">
<input type="submit" value="RESET" class="btn btn-info btn-align-center" style="margin-bottom:30px; margin-left:400px;" name="save"/>
				
					</td>
			
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html> 