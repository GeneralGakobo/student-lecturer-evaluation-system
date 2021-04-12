<?php 
extract($_POST);
if(isset($save))
{

	$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

	$sql=mysqli_query($conn,"select * from departments where department_id='$n' and department_name='$e'");
	$r=mysqli_num_rows($sql);
   
	if($r==true)
	 {
		$err="<script>


  swal({
  title: 'Oops!',
  text:'Department already exists!!',
  icon: 'warning',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_department';
}, 3000);
;

</script>";
	}
	else
	{
   

$query="insert into departments values('','$n','$e','$hob',now())";
mysqli_query($conn,$query);

//upload image

$err="<script>


  swal({
  title: 'Done!',
  text:'Department succesfully added!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_department';
}, 3000);
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

	<caption><h2 align="center" style="">Add Department</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<tr>
					<td>Department Id</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr> 

				<tr>
					<td>Department Name </td>
					<Td><input type="text" name="e" class="form-control" required/></td>
				</tr>

                    
              
                <tr>
					<td>Select School</td>
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


<Td colspan="2" align="center">
<input type="submit" value="Add Department" class="btn btn-info" name="save"/>

				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>