
    <?php

$user=$_SESSION['user'];
$conb=mysqli_query($conn,"select * from faculty where user_name='$user'");

$resy=mysqli_fetch_assoc($conb);	 
    
$nun= @$resy['email'];
//  echo "$nun";
?>

<?php
$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error('noop'));
$cona="select * from user_selected_courses where id='".$_GET['id']."'";
$rtr = mysqli_query($conn, $cona);
// $ttt= '".$_GET['id']."';
// echo "$ttt";

$resa=mysqli_fetch_assoc($rtr) or die('ooooops');
$tuff = @$resa['student_id'];	
$uio = @$resa['ref_id'];
// echo "$tuff";
// echo "$uio";
?>



    <?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];


$sql=mysqli_query($conn,"select * from notifications where ref_id='$uio' and student_id='$tuff' ");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<script>


  swal({
  title: 'oops!',
  text:'You have already blocked this student',
  icon: 'warning',
  
});

</script>
";
}
else
{
$query="insert into notifications values('','$name','$student_id','$student_email','$course_id','$ref','$course_name','$group','$faculty','$lec_email','$lec_phone','$message',now())";

mysqli_query($conn,$query);

echo "<script>


  swal({
  title: 'Done!',
  text:'Student blocked',
  icon: 'success',
  button: true,
  
})
setTimeout(function(){
window.location.href='dashboard.php?info=display_semester_courses';
}, 2200);

;

</script>
";
}
}


?>

<?php


$conb=mysqli_query($conn,"select * from user where studentid='$tuff'");

$resy=mysqli_fetch_assoc($conb);	 
    
$n= @$resy['name'];
?>
<?php


$conbi=mysqli_query($conn,"select * from user_selected_courses where ref_id='$uio'");

$tre=mysqli_fetch_assoc($conbi);	 
    
// $n= @$resy['name'];
?>

<form method="post">
<fieldset>
<center><u><h1 style=color:#330066>Block <?php echo"$tuff" ?></h1></u></center><br>
 

<div class="display display-none" style="display:none">

<div class="control-group form-group">
    	<div class="controls">
        	<label>Student Name:</label>
            	<input value="<?php echo $n ?>" name="name" class="form-control" required>
        </div>
   	</div>

       <div class="control-group form-group">
    	<div class="controls">
        	<label>Student_id:</label>
            	<input value="<?php echo $tuff ?>" name="student_id" class="form-control" required>
        </div>
   	</div>

       <div class="control-group form-group">
    	<div class="controls">
        	<label>Student_email:</label>
            	<input value="<?php echo @$resy['email'];?>" name="student_email" class="form-control" required>
        </div>
   	</div>



       <div class="control-group form-group">
    	<div class="controls">
        	<label>Course Id:</label>
            	<input value="<?php echo @$tre['course_id']?>" name="course_id" class="form-control" required>
        </div>
   	</div>


       <div class="control-group form-group">
    	<div class="controls">
        	<label>Ref Id:</label>
            	<input value="<?php echo $uio ?>" name="ref" class="form-control" required>
        </div>
   	</div>


       <div class="control-group form-group">
    	<div class="controls">
        	<label>course Name:</label>
            	<input value="<?php echo @$tre['course_name'];?>" name="course_name" class="form-control" required>
        </div>
   	</div>

       
<div class="control-group form-group">
    	<div class="controls">
        	<label>Lecture Group:</label>
            	<input value="<?php echo @$tre['group'];?>" name="group" class="form-control" required>
        </div>
   	</div>
       

       
<div class="control-group form-group">
    	<div class="controls">
        	<label>Lec Name:</label>
            	<input value="<?php echo @$tre['offered_by'];?>" name="faculty" class="form-control" required>
        </div>
   	</div>

       
<div class="control-group form-group">
    	<div class="controls">
        	<label>Lec Email:</label>
            	<input value="<?php echo @$tre['faculty_id'];?>" name="lec_email" class="form-control" required>
        </div>
   	</div>
     

<div class="control-group form-group">
    	<div class="controls">
        	<label>Active:</label>
            	<input value="<?php echo 1 ?>" name="lec_phone" class="form-control" required>
        </div>
   	</div>



</div>


<label style="margin-left:450px; font-size:30px;">Message</label><br><br>
<center>
<textarea name="message" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center>

<a href="#"onclick='inserts([id])'>
<p align="center"><button type="submit" class="btn btn-warning" name="sub">Block</button></p>


</form>
</fieldset>


<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>