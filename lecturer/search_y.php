<?php 
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from semester_courses where ref_id='$search' or course_name='$search' or 	course_id='$search'");
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
		<td colspan="16"><a href="dashboard.php?info=say">Go Back to Courses Page</a></td>
	</tr>
	<Tr class="active">
		<th>Sr.No</th>
        <th>Ref Id</th>
        <th>Course Id</th>
		<th>Course Name</th>
        <th>Lecture Group</th>
		<!-- <th>Offered By</th>
        <th>Lec Email</th>
        <th>Department Offered</th> -->
		<th>Add</th>
		<!--<th>Update</th>-->
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['ref_id']."</td>";
echo "<td>".$row['course_id']."</td>";
echo "<td>".$row['course_name']."</td>";
echo "<td>".$row['group']."</td>";
// echo "<td>".$row['offered_by']."</td>";
// echo "<td>".$row['faculty_id']."</td>";
// echo "<td>".$row['department_offered']."</td>";

echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=lee'><button type='submit' class='btn btn-success'>Add</button></a></td>";
		

?>	
<!--<Td><a href="index.php?page=update_group" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>-->

<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>