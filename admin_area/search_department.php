<?php 
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from departments where department_name='$search' or school='$search' or	department_id='$search'");
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
	a=confirm('Are You Sure To Delete This Department ?')
	 if(a)
     {
        window.location.href='delete_department.php?id='+id;
     }
}
</script>		
<h2 style="color:#00FFCC; text-decoration:underline" align="center" >Results Found</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="16"><a href="dashboard.php?info=display_department">Go Back to Departments Page</a></td>
	</tr>
	<Tr class="active">
		<th>Sr.No</th>
        <th>Department Id</th>
		<th>Department Name</th>
        <th>School Under</th>
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
echo "<td>".$row['department_id']."</td>";
echo "<td>".$row['department_name']."</td>";
echo "<td>".$row['school']."</td>";

		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_department'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
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