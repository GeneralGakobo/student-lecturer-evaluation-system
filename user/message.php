<?php
extract($_POST);
if(isset($save))
{
	$conn= mysqli_connect("localhost","root","","ueab")or die(mysqli_error( 'Database Connection Failed!'));
mysqli_query($conn,"insert into contact values('','$n','$y','$e','$m','$z','$msg',now())");
	
$err="<font color='#00FF33'><h3>Message sent!!   We Will Contact you soon...</h3></font>";
$err="<script>


  swal({
  title: 'Done!',
  text:'Message Sent succesfully, we will contact you soon...',
  icon: 'success',
  
})
setTimeout(function(){
window.location.href='index.php';
}, 2300);

;

</script>
";
	

}

?>

        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    
                    </li>
                   
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8">
                <h3><font color="#330066">Contact us </font></h3>
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
                  <div class="display display-none" style="display:none">	
				    <div class="control-group form-group">
                        
					
						<div class="controls">
                            <label>Student Id:</label>
                            <select class="form-control" name="n"required data-validation-required-message="Please enter your Student Id">
                                    <?php
                            $sql=mysqli_query($conn,"select * from user where studentid='".$users['studentid']."'");
                            while($z=mysqli_fetch_array($sql))
                            {
                            echo "<option value='".$z['studentid']."'>".$z['studentid']."</option>";
                            }
                                    ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group form-group">
                        
						
						<div class="controls">
                            <label>Student Name:</label>
                            <select class="form-control" name="y" required data-validation-required-message="Please enter your name.">
                            <?php
                            $sql=mysqli_query($conn,"select * from user where studentid='".$users['studentid']."'");
                            while($z=mysqli_fetch_array($sql))
                            {
                            echo "<option value='".$z['name']."'>".$z['name']."</option>";
                            }
                                    ?>
                            </select>
                        </div>
                    </div>


                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile Number:</label>
                            <select class="form-control" name="m" required data-validation-required-message="Please enter your phone number.">
                        
                            <?php
                            $sql=mysqli_query($conn,"select * from user where studentid='".$users['studentid']."'");
                            while($z=mysqli_fetch_array($sql))
                            {
                            echo "<option value='".$z['mobile']."'>".$z['mobile']."</option>";
                            }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <select class="form-control" name="e" required data-validation-required-message="Please enter your email address.">
                        
                            <?php
                            $sql=mysqli_query($conn,"select * from user where studentid='".$users['studentid']."'");
                            while($z=mysqli_fetch_array($sql))
                            {
                            echo "<option value='".$z['email']."'>".$z['email']."</option>";
                            }
                                    ?>
                            </select>
                        </div>
                    </div>
</div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Subject:</label>
                            <input type="text" class="form-control" name="z" required data-validation-required-message="Please the Subject of your Message.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="save" class="btn btn-primary">Send Message</button>
					<h1></h1>
                </form>
            </div>
			<div class="col-md-4" style="margin-top:30px">
                <h3>Contact Details</h3>
                <p>
                    ICT OFFICE<br>ADMINISTRATION BLOCK, UEAB<br>MAIN CAMPUS
                </p>
             
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E-mail</abbr>: <a href="mailto:support@ueab.ac.ke">support@ueab.ac.ke</a>
                </p>
                <br>
                <p><i class="fa fa-clock-o"></i> 
                    <p title="Hours">OFFICE HOURS:</p><br> Monday - Thursday: 9:00 AM to 4:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        
            <!-- Contact Details Column -->
            
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <!-- /.row -->

    <br/><br/>
    
    </div>
    <!-- /.container -->
