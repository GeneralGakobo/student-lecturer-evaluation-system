<?php 
extract($_POST);
if(isset($save))
{

	$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

	$sql=mysqli_query($conn,"select * from majors where major_id='$n' and major_name='$a'");
	$r=mysqli_num_rows($sql);
   
	if($r==true)
	 {
		$err="<script>


  swal({
  title: 'Oops!',
  text:'Major already exists!!',
  icon: 'warning',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_major';
}, 4000);
;

</script>";
	 }
	  else
	 {
   

    $query="insert into majors values('','$n','$a','$b','$c',now())";
    mysqli_query($conn,$query);


$err="<script>


  swal({
  title: 'Done!',
  text:'Major succesfully added!!',
  icon: 'success',
  
})

setTimeout(function(){
window.location.href='dashboard.php?info=display_major';
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

	<caption><h2 align="center" style="">Add Major</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
    
               
				
                <tr>
					<td>Major Id</td>
					<Td><input type="text" name="n" class="form-control" required>
                
					</td>
				</tr> 
               
                <tr>
					<td>Major Name</td>
					<Td><input type="text" name="a" class="form-control" required>
					</td>
				</tr> 
               <div class="display display-none" style="display:none">
				<tr>
					<td>School Offered</td>
					<Td><select name="b" class="form-control" required>
                <?php   
				include('dbconfig.php');
				$query = "SELECT * FROM hod where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					echo '<option value="'.$row['school'].'">'.$row['school'].'</option>';
				}
               
                        ?>
					</select>
					</td>
				</tr>

                <tr>
					<td>Department Offered</td>
					<Td><select name="c" class="form-control" required>
               <?php   
				include('dbconfig.php');
				$query = "SELECT * FROM hod where user_name='$user'";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					echo '<option value="'.$row['department'].'">'.$row['department'].'</option>';
				}
               
                        ?>
					</select>
					</td>
				</tr>
				</div>

<Td colspan="2" align="center">
<input type="submit" value="Add Major" class="btn btn-info" name="save"/>

				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>