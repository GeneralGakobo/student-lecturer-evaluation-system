<script type="text/javascript">
function inserts(id)
{
	 a=confirm('This information is highly valued and confidential, Can we trust the information you provided to be genuine?')
   
}

</script>	

    
    
    
    
    <?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];


$sqln=mysqli_query($conn,"select * from feed where student_email='$user' and ref_id='$n'");
$rn=mysqli_num_rows($sqln);

if($rn==true)
{
echo "<script>


  swal({
  title: 'oops!',
  text:'You have already evaluated this course',
  icon: 'warning',
  
});

</script>
";
} elseif($rn==false){

  
$sqle=mysqli_query($conn,"select * from notifications where student_email='$user' and ref_id='$n'");
$rtr=mysqli_num_rows($sqle);

if($rtr==true)
{
echo "<script>


  swal({
  title: 'oops!',
  text:'You are blocked from evaluating this course',
  icon: 'warning',
  
})
setTimeout(function(){
window.location.href='index.php?info=evaluate';
}, 2300);

;

</script>
";

}



else
{
$query="insert into feed values('','$n','$email','$student_id','$student_name','$course_id','$course_name','$group','$department_offered','$faculty','$lec_email','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14','$quest15','$quest16','$quest17','$quest18','$quest19','$quest20','$quest21','$quest22','$quest23','$quest24','$quest25',now())";

mysqli_query($conn,$query);

echo "<script>


  swal({
  title: 'Done!',
  text:'Thank you for Your feedback',
  icon: 'success',
  button: true,
  
})
setTimeout(function(){
window.location.href='index.php?info=evaluate';
}, 3000);

;

</script>
";
}
}
}

?>

<?php
$con=mysqli_query($conn,"select * from user_selected_courses where id='".$_GET['id']."'");
$res=mysqli_fetch_assoc($con);
?>

<?php


$conb=mysqli_query($conn,"select * from user where email='$user'");

$resy=mysqli_fetch_assoc($conb);	 
    
$n= @$resy['name'];
?>


<form method="post">
<fieldset>
<center><u><h1 style=color:#330066>Student's FeedBack Form</h1></u></center><br>
 

<div class="display display-none" style="display:none">

<div class="control-group form-group">
    	<div class="controls">
        	<label>course Ref_Id:</label>
            	<input value="<?php echo @$res['ref_id'];?>" name="n" class="form-control" required>
        </div>
   	</div>


       <div class="control-group form-group">
    	<div class="controls">
        	<label>Student_email:</label>
            	<input value="<?php echo $user?>" name="email" class="form-control" required>
        </div>
   	</div>

       <div class="control-group form-group">
    	<div class="controls">
        	<label>Student_id:</label>
            	<input value="<?php echo @$res['student_id'];?>" name="student_id" class="form-control" required>
        </div>
   	</div>


       <div class="control-group form-group">
    	<div class="controls">
        	<label>Student_name:</label>
            	<input value="<?php echo $n?>" name="student_name" class="form-control" required>
        </div>
   	</div>


       <div class="control-group form-group">
    	<div class="controls">
        	<label>course Id:</label>
            	<input value="<?php echo @$res['course_id'];?>" name="course_id" class="form-control" required>
        </div>
   	</div>


       <div class="control-group form-group">
    	<div class="controls">
        	<label>course Name:</label>
            	<input value="<?php echo @$res['course_name'];?>" name="course_name" class="form-control" required>
        </div>
   	</div>

       
<div class="control-group form-group">
    	<div class="controls">
        	<label>Lecture Group:</label>
            	<input value="<?php echo @$res['group'];?>" name="group" class="form-control" required>
        </div>
   	</div>
       
<div class="control-group form-group">
    	<div class="controls">
        	<label>Department Offered:</label>
            	<input value="<?php echo @$res['department_offered'];?>" name="department_offered" class="form-control" required>
        </div>
   	</div>
       
<div class="control-group form-group">
    	<div class="controls">
        	<label>Lec Name:</label>
            	<input value="<?php echo @$res['offered_by'];?>" name="faculty" class="form-control" required>
        </div>
   	</div>

     
<div class="control-group form-group">
    	<div class="controls">
        	<label>Lec Email:</label>
            	<input value="<?php echo @$res['faculty_id'];?>" name="lec_email" class="form-control" required>
        </div>
   	</div>





</div>












<fieldset>
<label>Course:
<?php echo @$res['course_name'];?>     </label>
<label style="margin-left:30px;">    By:
  <?php echo @$res['offered_by'];?></label>

<h3>Please give your answer about the following question by circling the given grade on the scale:</h3>


<button type="button" style="font-size:10pt;color:white;background-color:green;border:2px solid #336600;margin-right:20px;padding:6px">Strongly Agree 6</button>
<button type="button" style="font-size:10pt;color:white;background-color:aqua;border:2px solid #336600;margin-right:20px;padding:6px">Agree 5</button>
<button type="button" style="font-size:10pt;color:white;background-color:blue;border:2px solid #336600;margin-right:20px;padding:6px">Somewhat Agree 4</button>
<button type="button" style="font-size:10pt;color:white;background-color:Black;border:2px solid #336600;margin-right:20px;padding:6px">Somewhat Disagree 3</button>
<button type="button" style="font-size:10pt;color:white;background-color:#990012;border:2px solid #336600;margin-right:20px;padding:6px">Disagree 2</button>
<button type="button" style="font-size:10pt;color:white;background-color:red;border:2px solid #336600;margin-right:10px;padding:6px">Strongly Disagree 1</button><br>
<br>

<!-- <h3>1-Course Material</h3> -->
<table class="table table-bordered">
<tr style="margin-right:0px;">
<td><b>1:</b> Teacher provided the course outline having weekly content plan with list of  required text book:</td>  
<td style="width:170px;">
<input type="radio" name="quest1" value="6" required> 6
 <input type="radio" name="quest1" value="5">5
 <input type="radio" name="quest1" value="4"> 4
<input type="radio" name="quest1" value="3">3
<input type="radio" name="quest1" value="2">2
<input type="radio" name="quest1" value="1">1
</td>
</tr>
 
 <tr>
<td><b>2:</b> Class time is used in an efficient and productive manner.:</td>  
<td>
<input type="radio" name="quest2" value="6" required> 6
 <input type="radio" name="quest2" value="5">5
 <input type="radio" name="quest2" value="4"> 4
<input type="radio" name="quest2" value="3">3
<input type="radio" name="quest2" value="2">2
<input type="radio" name="quest2" value="1">1
</td>
</tr>
 
 <tr>
<td><b>3:</b> The lecturer maintains enough classroom discipline so the class and I can learn.:</td>  
<td>
<input type="radio" name="quest3" value="6" required> 6
 <input type="radio" name="quest3" value="5">5
 <input type="radio" name="quest3" value="4"> 4
<input type="radio" name="quest3" value="3">3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1
</td>
</tr>
 
 <tr>
<td><b>4:</b> The lecturer is generally well-organized and prepared for class.:</td>  
<td>
<input type="radio" name="quest4" value="6" required> 6
 <input type="radio" name="quest4" value="5">5
 <input type="radio" name="quest4" value="4"> 4
<input type="radio" name="quest4" value="3">3
<input type="radio" name="quest4" value="2">2
<input type="radio" name="quest4" value="1">1
</td>
</tr>
 
 <tr>
<td><b>5:</b> Tests and assignments are corrected and returned to me, and I know where I stand in this class in terms of my grade.:</td>  
<td>
<input type="radio" name="quest5" value="6" required> 6
 <input type="radio" name="quest5" value="5">5
 <input type="radio" name="quest5" value="4"> 4
<input type="radio" name="quest5" value="3">3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1
</td>
</tr>
 
 <tr>
<td><b>6:</b> What we do in this class (homework and classwork) helps me learn the subject matter.:</td>  
<td>
<input type="radio" name="quest6" value="6" required> 6
 <input type="radio" name="quest6" value="5">5
 <input type="radio" name="quest6" value="4"> 4
<input type="radio" name="quest6" value="3">3
<input type="radio" name="quest6" value="2">2
<input type="radio" name="quest6" value="1">1
</td>
</tr>
 
 <tr>
<td><b>7:</b> The lecturer explains the material clearly and in ways that are easy to understand, offers alternative explanations or additional examples, and clears up confusion.:</td>  
<td>
<input type="radio" name="quest7" value="6" required> 6
 <input type="radio" name="quest7" value="5">5
 <input type="radio" name="quest7" value="4"> 4
<input type="radio" name="quest7" value="3">3
<input type="radio" name="quest7" value="2">2
<input type="radio" name="quest7" value="1">1
</td>
</tr>
 
 <tr>
<td><b>8:</b> The lecturer gives the right amount of graded assignments, tests, and quizzes in order to fairly evaluate my performance.:</td>  
<td>
<input type="radio" name="quest8" value="6" required> 6
 <input type="radio" name="quest8" value="5">5
 <input type="radio" name="quest8" value="4"> 4
<input type="radio" name="quest8" value="3">3
<input type="radio" name="quest8" value="2">2
<input type="radio" name="quest8" value="1">1
</td>
</tr>
 
 <tr>
<td><b>9:</b> The grading system is fair and reasonable, and I am consistently graded according to this system.:</td>  
<td>
<input type="radio" name="quest9" value="6" required> 6
 <input type="radio" name="quest9" value="5">5
 <input type="radio" name="quest9" value="4"> 4
<input type="radio" name="quest9" value="3">3
<input type="radio" name="quest9" value="2">2
<input type="radio" name="quest9" value="1">1
</td>
</tr>
 
 <tr>
<td><b>10:</b> The lecturer uses a variety of activities (discussion, group work, lecture, labs, technology, etc.) during class time.:</td>  
<td>
<input type="radio" name="quest10" value="6" required> 6
 <input type="radio" name="quest10" value="5">5
 <input type="radio" name="quest10" value="4"> 4
<input type="radio" name="quest10" value="3">3
<input type="radio" name="quest10" value="2">2
<input type="radio" name="quest10" value="1">1
</td>
</tr>
 
 <tr>
<td><b>11:</b> The lecturer knows the subject area very well.:</td>  
<td>
<input type="radio" name="quest11" value="6" required> 6
 <input type="radio" name="quest11" value="5">5
 <input type="radio" name="quest11" value="4"> 4
<input type="radio" name="quest11" value="3">3
<input type="radio" name="quest11" value="2">2
<input type="radio" name="quest11" value="1">1
</td>
</tr>
 
 <tr>
<td><b>12:</b> The goals of this class are clear to me:</td>  
<td>
<input type="radio" name="quest12" value="6" required> 6
 <input type="radio" name="quest12" value="5">5
 <input type="radio" name="quest12" value="4"> 4
<input type="radio" name="quest12" value="3">3
<input type="radio" name="quest12" value="2">2
<input type="radio" name="quest12" value="1">1
</td>
</tr>
 
 <tr>
<td><b>13:</b> The lecturer encourages the students to think for themselves.:</td>  
<td>
<input type="radio" name="quest13" value="6" required> 6
 <input type="radio" name="quest13" value="5">5
 <input type="radio" name="quest13" value="4"> 4
<input type="radio" name="quest13" value="3">3
<input type="radio" name="quest13" value="2">2
<input type="radio" name="quest13" value="1">1
</td>
</tr>
 
 <tr>
<td><b>14:</b> The lecturer challenges my abilities as a student, and this class requires consistent time, study, and preparation.:</td>  
<td>
<input type="radio" name="quest14" value="6" required> 6
 <input type="radio" name="quest14" value="5">5
 <input type="radio" name="quest14" value="4"> 4
<input type="radio" name="quest14" value="3">3
<input type="radio" name="quest14" value="2">2
<input type="radio" name="quest14" value="1">1
</td>
</tr>
 
 <tr>
<td><b>15:</b> In this class, I feel free to ask questions and participate in discussions and activities.:</td>  
<td>
<input type="radio" name="quest15" value="6" required> 6
 <input type="radio" name="quest15" value="5">5
 <input type="radio" name="quest15" value="4"> 4
<input type="radio" name="quest15" value="3">3
<input type="radio" name="quest15" value="2">2
<input type="radio" name="quest15" value="1">1
</td>
</tr>
 
 <tr>
<td><b>16:</b> The lecturer offers encouragement and positive reinforcement, as well as constructive criticism.:</td>  
<td>
<input type="radio" name="quest16" value="6" required> 6
 <input type="radio" name="quest16" value="5">5
 <input type="radio" name="quest16" value="4"> 4
<input type="radio" name="quest16" value="3">3
<input type="radio" name="quest16" value="2">2
<input type="radio" name="quest16" value="1">1
</td>
</tr>
 
 <tr>
<td><b>17:</b> The lecturer is available to students outside class time for tutoring, review work, or to answer questions.:</td>  
<td>
<input type="radio" name="quest17" value="6" required> 6
 <input type="radio" name="quest17" value="5">5
 <input type="radio" name="quest17" value="4"> 4
<input type="radio" name="quest17" value="3">3
<input type="radio" name="quest17" value="2">2
<input type="radio" name="quest17" value="1">1
</td>
</tr>
 
 <tr>
<td><b>18:</b> The lecturer is interested in and enthusiastic about teaching this class.:</td>  
<td>
<input type="radio" name="quest18" value="6" required> 6
 <input type="radio" name="quest18" value="5">5
 <input type="radio" name="quest18" value="4"> 4
<input type="radio" name="quest18" value="3">3
<input type="radio" name="quest18" value="2">2
<input type="radio" name="quest18" value="1">1
</td>
</tr>
 
 <tr>
<td><b>19:</b> The lecturer is approachable; she/he demonstrates interest in and concern for the students.:</td>  
<td>
<input type="radio" name="quest19" value="6" required> 6
 <input type="radio" name="quest19" value="5">5
 <input type="radio" name="quest19" value="4"> 4
<input type="radio" name="quest19" value="3">3
<input type="radio" name="quest19" value="2">2
<input type="radio" name="quest19" value="1">1
</td>
</tr>
 
 <tr>
<td><b>20:</b> This class/lecturer encourages me to become a person for others.:</td>  
<td>
<input type="radio" name="quest20" value="6" required> 6
 <input type="radio" name="quest20" value="5">5
 <input type="radio" name="quest20" value="4"> 4
<input type="radio" name="quest20" value="3">3
<input type="radio" name="quest20" value="2">2
<input type="radio" name="quest20" value="1">1
</td>
</tr>
 
 <tr>
<td><b>21:</b> has a positive Christian witness that encourages me as a student to adopt a Christian lifestyle.

:</td>  
<td>
<input type="radio" name="quest21" value="6" required> 6
 <input type="radio" name="quest21" value="5">5
 <input type="radio" name="quest21" value="4"> 4
<input type="radio" name="quest21" value="3">3
<input type="radio" name="quest21" value="2">2
<input type="radio" name="quest21" value="1">1
</td>
</tr>
 
 <tr>
<td><b>22:</b> Integrates Christian concepts into the  learning objectives:</td>  
<td>
<input type="radio" name="quest22" value="6" required> 6
 <input type="radio" name="quest22" value="5">5
 <input type="radio" name="quest22" value="4"> 4
<input type="radio" name="quest22" value="3">3
<input type="radio" name="quest22" value="2">2
<input type="radio" name="quest22" value="1">1
</td>
</tr>
 
 <tr>
<td><b>23:</b> My cumulative grade point average (GPA) is:</td>  
<td>
<input type="radio" name="quest23" value="3.5 to 4.0" required> 3.5 to 4.0<br>
 <input type="radio" name="quest23" value="3.0 to 3.49"> 3.0 to 3.49<br>
 <input type="radio" name="quest23" value="2.5 to 2.99"> 2.5 to 2.99<br>
<input type="radio" name="quest23" value="2.0 to 2.49"> 2.0 to 2.49<br>
<input type="radio" name="quest23" value="less than 2.0"> less than 2.0
</td>
</tr>
 <tr>
<td><b>24:</b> The grade that I expect to get in this class is:</td>  
<td>
<input type="radio" name="quest24" value=" A or A-" required> A or A-<br>
 <input type="radio" name="quest24" value="B+, B or B-"> B+, B or B-<br>
 <input type="radio" name="quest24" value="C+, C or C-"> C+, C or C-<br>
<input type="radio" name="quest24" value="D"> D<br>
<input type="radio" name="quest24" value="F"> F<br>
<input type="radio" name="quest24" value="Incomplete"> Incomplete
</td>
</tr>
 
</table>

<b>25:</b>Give any suggestion you consider necessary to improve learning at UEAB:<br><br>
<center>
<textarea name="quest25" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center><br><br>

<a href="#"onclick='inserts([id])'>
<p align="center"><button type="submit" class="btn btn-primary" name="sub">Submit</button></p>


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