<?php 
$search=$_POST['searchGroup'];
$q=mysqli_query($conn,"select * from feed where ref_id='$search' ");
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
        window.location.href='delete_semester_courses.php?id='+id;
     }
}
</script>	
<h2 style="color:#00FFCC; text-decoration:underline" align="center" >Results Found</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="16"><a href="dashboard.php?info=sorted_results">Go Back</a></td>
	</tr>
	<Tr class="active">
    
    <?php
$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
$con=mysqli_query($conn,"select * from semester_courses where ref_id='$search'");

$res=mysqli_fetch_assoc($con);	
?>
	<tr>
    <th> Evaluation Ref Id :</th>
		<td>
            	<input value="<?php echo @$res['ref_id'];?>"  name="ref_id" class="form-control" required>
        </td>
		
		</div>
    </div>

    <th> Lecturer Name :</th>
		<td>
            	<input value="<?php echo @$res['offered_by'];?>"  name="offered_by" class="form-control" required>
        </td>
		
		</div>
    </div>
</tr>
<tr>
		
    	
		<th> Course Id :</th>
		<td>
            	<input value="<?php echo @$res['course_id'];?>"  name="course_id" class="form-control" required>
        </td>
		
		</div>
    </div>
    	
		<th> Course Name :</th>
		<td>
            	<input value="<?php echo @$res['course_name'];?>"  name="course_name" class="form-control" required>
        </td>
		
		</div>
    </div>
    	
    <th> Lecture Group :</th>
		<td>
            	<input value="<?php echo @$res['group'];?>"  name="group" class="form-control" required>
        </td>
		
		</div>
    </div>
    </tr>
    </table>
    <br>
    <br>
		<!-- <th>Evaluation Ref Id</th>
		<th>Lecture Group</th>
		<th>Course Id</th>
		<th>Course Name</th>
		<th>Lecturer Name</th>
		<th>Lecturer Email</th>
        </tr> -->
        <table class="table table-bordered"
        <tr>
        <th>Sr.No</th>
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

		<!--<th>Update</th>-->
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

    echo "<Tr>";
            
			// echo "<td>".$row['ref_id']."</td>";
            // echo "<td>".$row['lecture_group']."</td>";
            // echo "<td>".$row['course_id']."</td>";
            // echo "<td>".$row['course_name']."</td>";
            // echo "<td>".$row['faculty']."</td>";
            // echo "<td>".$row['faculty_id']."</td>";

    echo "</tr>";
    echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$row['quest1']."</td>";
            echo "<td>".$row['quest2']."</td>";
            echo "<td>".$row['quest3']."</td>";
            echo "<td>".$row['quest4']."</td>";
            echo "<td>".$row['quest5']."</td>";
            echo "<td>".$row['quest6']."</td>";
            echo "<td>".$row['quest7']."</td>";
            echo "<td>".$row['quest8']."</td>";
            echo "<td>".$row['quest9']."</td>";
            echo "<td>".$row['quest10']."</td>";	
            echo "<td>".$row['quest11']."</td>";
            echo "<td>".$row['quest12']."</td>";
			
			

?>	
<!--<Td><a href="index.php?page=update_group" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>-->

<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>
<script>
	 function printpage()
	 {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
		window.print();
    }
</script>
<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; margin-bottom:20px; background:#ffffff">
	<td colspan="7" align="center">
	<button id="printpagebutton"  class="btn btn-primary" onClick="printpage()"><span class="glyphicon glyphicon-print"></span> &nbsp;Print</button>
	</td>
    


<!-- <a href="dashboard.php?info=advanced_results"><button type="submit" class="btn btn-primary">Advanced</button></a> -->
</div>