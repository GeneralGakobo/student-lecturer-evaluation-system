<?php 
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from faculty where Name='$search' or 	email='$search' or school='$search' or department='$search' or mobile='$search' ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Records exists !!!</h2>";
}
else
{
?>
		
<h2 style="color:#00FFCC; text-decoration:underline" align="center" >Results Found</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="16"><a href="dashboard.php?info=detail_lec">Go Back to Lecturer's Page</a></td>
	</tr>
	<Tr class="active">
		<th>Sr.No</th>
        <th>Name</th>
		<!-- <th>Designation</th> -->
		<!-- <th>School</th> -->
        <!-- <th>Department</th> -->
        <th>Email</th>
        <!-- <th>Mobile</th> -->
		<!-- <th>Pass Key</th> --> -->
		<th>View</th>
		<!-- <th>Delete</th> -->
		<!--<th>Update</th>-->
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['Name']."</td>";
		// echo "<td>".$row['designation']."</td>";
		// echo "<td>".$row['school']."</td>";
		// echo "<td>".$row['department']."</td>";
		echo "<td>".$row['email']."</td>";
		// echo "<td>".$row['mobile']."</td>";
		// echo "<td>".$row['password']."</td>";

		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=vv_lec'><button>GO</button></a></td>";
		
		
		// echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
	?>	
<!--<Td><a href="index.php?page=update_group" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>-->

<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>