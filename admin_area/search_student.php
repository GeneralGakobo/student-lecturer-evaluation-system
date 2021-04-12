<?php 
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from user where name='$search' or email='$search' or major='$search' or  mobile='$search' or school='$search' or department='$search' or 	studentid='$search'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Records exists !!!</h2>";
}
else
{
?>
<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_student.php?id='+id;
     }
}
</script>		
<h2 style="color:#00FFCC; text-decoration:underline" align="center" >Results Found</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="16"><a href="dashboard.php?info=display_student">Go Back to Students Page</a></td>
	</tr>
	<Tr class="active">
		<th>Sr.No</th>
        
	     <th>Student Id</th>;
         <th>Student Name</th>
	     <th>Email</th>
	     <!-- <th>Password</th> -->
	     <th>Mobile</th>
	     <th>school</th>
	     <th>Department</th>
	     <th>Major</th>
	     <th>gender</th>
		<th>Update</th>
		<th>Delete</th>
		<!--<th>Update</th>-->
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['studentid']."</td>";
echo "<td>".$row['name']."</td>";

echo "<td>".$row['email']."</td>";
// echo "<td>".$row['pass']."</td>";
echo "<td>".$row['mobile']."</td>";
@$row['school'];
		$ui = @$row['school'];

 					$query = "SELECT * FROM schools where id=$ui ";
					 
				$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
				$do = mysqli_query($conn, "select * from schools where id=$ui");
				while($rw = mysqli_fetch_array($do)){
					$ui = $rw['school_name'];
				}

		echo "<td>$ui</td>";
// echo "<td>".$row['school']."</td>";

	@$row['department'];
		$yu = @$row['department'];
		$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
	$query = "SELECT * FROM departments where id=$yu ";
				$doo = mysqli_query($conn, $query);
				while($rwo = mysqli_fetch_array($doo)){
					$re = $rwo['department_name'];
				}


		echo "<td>$re</td>";
// echo "<td>".$row['department']."</td>";
echo "<td>".$row['major']."</td>";
echo "<td>".$row['gender']."</td>";

		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_student'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
	?>	
<!--<Td><a href="index.php?page=update_group" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>-->

<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>