<?php 
extract($_POST);
// if(isset($save))
// {	
    
//     mysqli_query($conn,"update user set  major='$major', mobile='$mob', school='$hob', department='$sem' where email='$user'");	

//     $err="<font color='green'>Student Details updated Succesfully</font>";
// }

$con=mysqli_query($conn,"select * from user where email='$user'");

$res=mysqli_fetch_assoc($con);	    


?>
		
<h1 class="page-header" style="color:#330066">Student Details</h1>
<div class="col-lg-8">
	<form method="post">
   
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
    <div class="err" style="font-size:20px;">
        	<label>Student Name:</label>
            	<?php echo @$res['name'];?>
				 
				 
      
	<br>
            
            
        	<label>Student Id:</label>
            	<?php echo @$res['studentid'];?>
      
<br>
	  
        	<label>Student Email:</label>
            	<?php echo @$res['email'];?>
         
		<br>
       <!-- <legend> <h3 style="color:#330066">Keep your details up to date</h3></legend> -->
          
        	<label>Phone Number:</label>
            <!-- <a href='index.php?info=edit_studentphone'><span class='glyphicon glyphicon-pencil'style=color:green;float:right;></span></a> -->
            	<?php echo @$res['mobile'];?>
    
	     </table>
	</div>

<div class="gtr" style="font-size:20px;">
               <tr>
            <label>Major:</label>
            <!-- <a href='index.php?info=edit_studentmajor'><span class='glyphicon glyphicon-pencil'style=color:green;float:right;></span></a> -->
		<?php echo @$res['major']; ?>
                </tr>
			
			
				<tr>
                <!-- <a href='index.php?info=edit_studentschool'><span class='glyphicon glyphicon-pencil'style=color:green;float:right;></span></a> -->
            	<?php @$res['school'];
				$iu = @$res['school'];
			// echo "$iu";
				$query = "SELECT * FROM schools where id=$iu ";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					echo '<h3 value="'.$row['id'].'">School: '.$row['school_name'].'</h3>';
				}
				
				?>
				</tr> 
               
				<tr>
					
                    <!-- <a href='index.php?info=edit_studentdept'><span class='glyphicon glyphicon-pencil'style=color:green;float:right;></span></a> -->
            	<?php @$res['department'];
				$iu = @$res['department'];
			// echo "$iu";
				$query = "SELECT * FROM departments where id=$iu ";
				$do =mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($do)){
					echo '<h3 value="'.$row['id'].'">Department: '.$row['department_name'].'</h3>';
				}
				?>
				</tr> 
               
			</tr>
        </tr>   	
	</div>
        </form>
		</div>
		<div class="col-sm-2"></div>
		</div>
        
	</body>
</html> 