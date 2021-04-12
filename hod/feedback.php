<?php 
$q=mysqli_query($conn,"select * from feed");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes()
{
	a=confirm('Are You Sure To Remove These Records ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?';
     }
}
</script>	


<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Evaluation Results</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<?php
echo "<td><a href='#' onclick='deletes()'>Empty Table</a></td>";
?>

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<th>Evaluation Ref Id</th>
		<th>Student Id</th>
		<th>Student Name</th>
		<th>Student Email</th>
		<th>Lecture Group</th>
		<th>Course Id</th>
		<th>Course Name</th>
		<th>Department Offered</th>
		<th>Lecturer Name</th>
		<th>Lecturer Email</th>
		<th>Quest1</th>
		<th>Quest2</th>
		<th>Quest3</th>
		<th>Quest4</th>
		<th>Quest5</th>
		<th>Quest6</th>
		<th>Quest7</th>
		<th>Quest8</th>
		<th>Quest9</th>
		<th>Quest10</th>
		<th>Quest11</th>
		<th>Quest12</th>
		<th>Quest13</th>
		<th>Quest14</th>
		<th>Evaluation Date</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			echo "<td>".$row[17]."</td>";
			echo "<td>".$row[18]."</td>";
			echo "<td>".$row[19]."</td>";
			echo "<td>".$row[20]."</td>";
			echo "<td>".$row[21]."</td>";
			echo "<td>".$row[22]."</td>";
			echo "<td>".$row[23]."</td>";
			echo "<td>".$row[24]."</td>";
			echo "<td>".$row[25]."</td>";
	
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
			
		$i++;
		
		}
		
		?>
		
	
		
</table>
</div>
</div>
<?php }?>