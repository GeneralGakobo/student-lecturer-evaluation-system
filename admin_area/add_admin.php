<?php
extract($_POST);
if(isset($save))
{	
	$conn= mysqli_connect("localhost","root","","ueab")or die(mysqli_error( 'Database Connection Failed!'));

    $sql=mysqli_query($conn,"select * from admin where admin_email='$n'") or die("select failed");
	$r=mysqli_num_rows($sql);
   
	if($r==true)
	 {
		$err= "<font color='red'><h3 align='center'>This Admin already Exists!!</h3></font>";
	 }
	  else
	 {
   

    $query="insert into admin values('','$n','$a')";
    mysqli_query($conn,$query);


    $err="<font color='blue'><h3 align='center'>Admin Added successfull !!<h3></font>";

    }
}

?>

<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-top:60px">

	<caption><h2 align="center" style="">Add Admin</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
    
               
				
                <tr>
					<td>Admin Email</td>
					<Td><input type="email" name="n" class="form-control" required>
                
					</td>
				</tr> 
               
                <tr>
					<td>Admin Password</td>
					<Td><input type="password" name="a" class="form-control" required>
					</td>
				</tr> 
               
<Td colspan="2" align="center">
<input type="submit" value="Add Admin" class="btn btn-info" name="save"/>

				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>