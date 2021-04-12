<?php 
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from schools where school_name='$search' or 	school_id='$search'");
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
	a=confirm('Are You Sure To Delete This School ?')
	 if(a)
     {
        window.location.href='delete_school.php?id='+id;
     }
}
</script>	
<h2 style="color:#00FFCC; text-decoration:underline" align="center" >Results Found</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="16"><a href="dashboard.php?info=display_major">Go Back to School Page</a></td>
	</tr>
	<Tr class="active">
		<th>Sr.No</th>
        <th>School Id</th>
		<th>School Name</th>
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
echo "<td>".$row['school_id']."</td>";
echo "<td>".$row['school_name']."</td>";


		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_school'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
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