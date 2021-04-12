<?php 
extract($_POST);
if(isset($save))
{

	$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

	$sql=mysqli_query($conn,"select * from courses where course_id='$n' and course_name='$a'");
	$r=mysqli_num_rows($sql);
   
	if($r==true)
	 {
		$err= "<font color='red'><h3 align='center'>This Course already Exists!!</h3></font>";
	 }
	  else
	 {
   

    $query="insert into courses values('','$n','$a','$aas','$b',now())";
    mysqli_query($conn,$query);


    $err="<font color='blue'><h3 align='center'>Course Added successfull !!<h3></font>";

}
}

?>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-top:60px">

	<caption><h2 align="center" style="">Add Course</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
    
               
				
                <tr>
					<td>Course Id</td>
					<Td><input type="text" name="n" class="form-control" required>
                
					</td>
				</tr> 
               
                <tr>
					<td>Course Name</td>
					<Td><input type="text" name="a" class="form-control" required>
					</td>
				</tr> 
				<tr>
					<td>Credit Hours</td>
					<Td><input type="text" name="aas" class="form-control" required>
					</td>
				</tr> 
               
				<tr>
					<td>Department Offered</td>
					<Td><select name="b" class="form-control" required>
                <?php
                $sql=mysqli_query($conn,"select * from departments");
                while($z=mysqli_fetch_array($sql))
                {
                echo "<option value='".$z['department_name']."'>".$z['department_name']."</option>";
                }
                        ?>
					</select>
					</td>
				</tr>

                <!-- <tr>
					<td>Offered By</td>
					<Td><select name="c" class="form-control" required>
               // <?php
               // $sql=mysqli_query($conn,"select * from faculty");
               // while($z=mysqli_fetch_array($sql))
               // {
               // echo "<option value='".$z['Name']."'>".$z['Name']."</option>";
               // }
                      ?>
					</select>
					</td>
				</tr> -->


<Td colspan="2" align="center">
<input type="submit" value="Add Course" class="btn btn-info" name="save"/>

				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>