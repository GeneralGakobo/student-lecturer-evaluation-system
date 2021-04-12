<?php 
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from user where name='$search' or email='$search' or 	studentid='$search'");
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
		<td colspan="16"><a href="dashboard.php?info=say">Go Back</a></td>
	</tr>
	<Tr class="active">
		<th>Sr.No</th>
        
	     <th>Student Id</th>;
         <th>Student Name</th>
	     <th>Email</th>
		<th>Add</th>
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
echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=class'><button type='submit' class='btn btn-success'>GO</button></a></td>";
		
?>	
<!--<Td><a href="index.php?page=update_group" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>-->

<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>