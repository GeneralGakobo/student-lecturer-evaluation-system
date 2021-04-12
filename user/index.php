
<?php

session_start();
include('../dbconfig.php');
$user= $_SESSION['user'];

if($user=="")
{header('location:../index.php');
}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
//print_r($users);
 
?>

  <?php

        $conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
        $user= $_SESSION['user'];
       $find_notifications = "Select * from notifications where student_email='$user' and active = 1";
       $result = mysqli_query($conn,$find_notifications);
       $count_active = '';
       $notifications_data = array(); 
       $deactive_notifications_dump = array();
        while($rows = mysqli_fetch_assoc($result)){
                $count_active = mysqli_num_rows($result);
                $notifications_data[] = array(
                            "id" => $rows['id'],
                            "course_id"=>$rows['course_id'],
                            "message"=>$rows['message']
                );
        }
        //only five specific posts
        // $deactive_notifications = "Select * from notifications where active = 0 ORDER BY n_id DESC LIMIT 0,5";
        // $result = mysqli_query($conn,$deactive_notifications);
        // while($rows = mysqli_fetch_assoc($result)){
        //   $deactive_notifications_dump[] = array(
        //               "id" => $rows['id'],
        //               "course_id"=>$rows['course_id'],
        //               "message"=>$rows['message']
        //   );
        
        // }

     ?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/ueab_logo.png">
    <title>UEAB Student-Lecturer Evaluation System</title>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> -->
    <!-- <script src="./assets/js/jquery.min.js"></script> -->
    <!-- <script src="./assets/js/bootstrap.min.js"></script> -->
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
     <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <script src="../sweet.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
















<style>
       
        .round{
          width:25px;
          height:25px;
          border-radius:50%;
          position:relative;
          background:red;
          display:block;
          padding:0.3rem 0.2rem !important;
          margin:0.3rem 0.2rem !important;
          left:0px;
          z-index: 99 !important;
        }
        .round > span {
          color:white;
          /* display:block; */
          text-align:center;
          margin-right:10px;
          margin-top:-20px;
          margin-left:9px;
          margin-bottom:10px;
          font-size:1rem !important;
          padding:10 !important;
        }
      
         
          
        }
       
    </style>





  </head>



<script type="text/javascript">
function inserts(id)

     {
        window.location.href='deactivate.php?id='+id;
     
}
</script>	



  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#330066">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>


          
          <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello <?php echo $users['name'];?>
       
       
  

</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
          <li><a href="logout.php"  style="color:#FFFFFF"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
            <!-- <li><a href="logout.php"  style="color:#FFFFFF">Logout</a></li> -->
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php" style="background:#330066">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			<!-- check users profile image -->
			<?php 
			$q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <li><a href="#"><img style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="#"><img style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			?>
			
      <li>
          <a href="index.php?info=update_password" style="color:#330066"><span class="glyphicon glyphicon-lock"></span>Update Password</a>
      </li>

      <li>
          <a href="index.php?info=myprofile" style="color:#330066"><span class="glyphicon glyphicon-user"></span>My Profile</a>
      </li>
      <!-- <li>
          <a href="index.php?info=update_profile" style="color:#330066"><span class="glyphicon glyphicon-asterisk"></span>Update Profile</a>
      </li> -->


      <li>
          <a href="index.php?info=selected_courses" style="color:#330066"><span class="glyphicon glyphicon-check"></span>Selected Courses</a>
      </li>


      <li>
          <a href="index.php?info=evaluate" style="color:#330066"><span class="glyphicon glyphicon-thumbs-up"></span>Evaluate Here!</a>
      </li>

      <li>
          <a href="index.php?info=message" style="color:#330066"><span class="glyphicon glyphicon-envelope"></span>Enquire</a>
      </li>
      <li>
          <a href="calendar.php" style="color:#330066"><span class="glyphicon glyphicon-calendar"></span>Calendar</a>
      </li>
      <li>
        
 <?php if(!empty($count_active)){?>
 <a href="index.php?info=notification" style="color:#330066">
<span class='glyphicon glyphicon-bell' style='color:#330066;'>
                    <div class="round" id="bell-count" data-value ="<?php echo $count_active;?>"><span><?php echo $count_active; ?></span>Notifications</div>
              
                </span> </a>  <?php }?>
                     
                    <?php if(!empty($count_active)){
                    
                      ?>
                     
                    <?php }else{ echo"<a href='index.php?info=notification'><span class='glyphicon glyphicon-bell' style=color:green;>Notifications</span></a>"?>
                        <!--old Messages-->
                       
                       
                        <!--old Messages-->
                     
                     <?php } ?>
                     
                     </div>
   <!-- <a href="index.php?info=notification" style="color:#330066"><span class="glyphicon glyphicon-phone"></span>Notification<i class="fa fa-bell"   id="over" data-value ="<?php echo $count_active;?>" style="z-index:-99 !important;font-size:20px;color:green;margin:0.5rem 0.4rem !important;"></i></a> -->

 <!-- <li> -->
 <!-- <li><a href="logout.php"  style="color:#330066"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li> -->
 <!-- </li>  -->

          </ul>
         
         
        </div>
		  
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <?php
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
									if($info=="update_profile")
										{
											include('update_profile.php');
										}
										
									elseif($info=="update_password")
										{
											include('update_password.php');
                    }
                    elseif($info=="myprofile")
										{
											include('myprofile.php');
                    }
                     elseif($info=="scripts")
										{
											include('scripts.php');
                    }
                    elseif($info=="edit_studentmajor")
										{
											include('edit_studentmajor.php');
                    }
                    elseif($info=="edit_studentphone")
										{
											include('edit_studentphone.php');
                    }
                    elseif($info=="edit_studentschool")
										{
											include('edit_studentschool.php');
                    }
                     elseif($info=="edit_studentdept")
										{
											include('edit_studentdept.php');
                    }
                    elseif($info=="check")
										{
											include('check.php');
                    }

                    elseif($info=="message")
										{
											include('message.php');
                    }
                    elseif($info=="evaluate")
										{
											include('evaluate.php');
                    }
                      elseif($info=="calendar")
										{
											include('calendar.php');
                    }
                    elseif($info=="calendar")
										{
											include('calendar.php');
                    }
                       elseif($info=="notification")
										{
											include('notification.php');
                    }
                       elseif($info=="delete_note")
										{
											include('delete_note.php');
                    }
                     elseif($info=="helper")
										{
											include('helper.php');
                    }
                     elseif($info=="export")
										{
											include('export.php');
                    }
                       elseif($info=="view_evaluated_courses")
										{
											include('view_evaluated_courses.php');
                    }
                      elseif($info=="deactivate")
										{
											include('deactivate.php');
                    }
                        elseif($info=="delete_evaluated")
										{
											include('delete_evaluated.php');
                    }

                       elseif($info=="resend_note")
										{
											include('resend_note.php');
                    }
                    elseif($info=="selected_courses")
										{
											include('selected_courses.php');
                    }
                  }
                    else
                    {
                    include('home.php');
                    }
                    
                  
                  ?>

                 
                 <!-- // include('scripts.php'); -->

                 

      
</div>
</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

<script>

<script>
$(document).ready(function(){
    var ids = new Array();
    $('#over').on('click',function(){
           $('#list').toggle();  
       });

   //Message with Ellipsis
   $('div.msg').each(function(){
       var len =$(this).text().trim(" ").split(" ");
      if(len.length > 12){
         var add_elip =  $(this).text().trim().substring(0, 65) + "…";
         $(this).text(add_elip);
      }
     
}); 


   $("#bell-count").on('click',function(e){
        e.preventDefault();

        let belvalue = $('#bell-count').attr('data-value');
        
        if(belvalue == ''){
         
          console.log("inactive");
        }else{
          $(".round").css('display','none');
          $("#list").css('display','block');
          
          // $('.message').each(function(){
          // var i = $(this).attr("data-id");
          // ids.push(i);
          
          // });
          //Ajax
          $('.message').click(function(e){
            e.preventDefault();
              $.ajax({
                url:'./connection/deactive.php',
                type:'POST',
                data:{"id":$(this).attr('data-id')},
                success:function(data){
                 
                    console.log(data);
                    location.reload();
                }
            });
        });
     }
   });

   $('#notify').on('click',function(e){
        e.preventDefault();
        var name = $('#course_id').val();
        var ins_msg = $('#message').val();
        if($.trim(name).length > 0 && $.trim(ins_msg).length > 0){
          var form_data = $('#frm_data').serialize();
        $.ajax({
          url:'./connection/insert.php',
                type:'POST',
                data:form_data,
                success:function(data){
                    location.reload();
                }
        });
        }else{
          alert("Please Fill All the fields");
        }
      
       
   });
});
</script>





  </body>
</html>