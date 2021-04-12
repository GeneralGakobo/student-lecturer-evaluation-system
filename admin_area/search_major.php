<?php 
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from majors where major_name='$search' or department_offered='$search' or school_offered='$search' or	major_id='$search'");
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
	a=confirm('Are You Sure To Delete This Record ?')
	 if(a)
     {
        window.location.href='delete_major.php?id='+id;
     }
}
</script>	
<h2 style="color:#00FFCC; text-decoration:underline" align="center" >Results Found</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="16"><a href="dashboard.php?info=display_major">Go Back to Majors Page</a></td>
	</tr>
	<Tr class="active">
		<th>Sr.No</th>
        <th>Major Id</th>
		<th>Major Name</th>
		<th>Department Offered</th>
        <th>School Offered</th>
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
echo "<td>".$row['major_id']."</td>";
echo "<td>".$row['major_name']."</td>";
echo "<td>".$row['department_offered']."</td>";
echo "<td>".$row['school_offered']."</td>";

		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_major'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
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