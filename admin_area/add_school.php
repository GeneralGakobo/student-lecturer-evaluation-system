<?php 
extract($_POST);
if(isset($save))
{

	$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

	$sql=mysqli_query($conn,"select * from schools where school_id='$n' and school_name='$e'");
	$r=mysqli_num_rows($sql);
   
	if($r==true)
	 {
		 
$err="<script>


  swal({
  title: 'Oops!',
  text:'This school already exists!!',
  icon: 'warning',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_school';
}, 4000);
;

</script>";
	}
	else
	{
   

$query="insert into schools values('','$n','$e',now())";
mysqli_query($conn,$query);

//upload image

$err="<script>


  swal({
  title: 'Done!',
  text:'School succesfully added!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_school';
}, 4000);
;

</script>";


}
}

?>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-top:60px">

	<caption><h2 align="center" style="">Add School</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<tr>
					<td>School Id</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr> 

				<tr>
					<td>School Name </td>
					<Td><input type="text" name="e" class="form-control" required/></td>
				</tr>
						
<Td colspan="2" align="center">
<input type="submit" value="Add School" class="btn btn-info" name="save"/>

				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>