<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');
$user=$_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/ueab_logo.png">
    <title>UEAB Evaluation System Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <!-- <script src="../css/sweet.js"></script>
	<script src="../css/jquery.min.js"></script> -->

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<script src="../css/sweet.js"></script>
	<script src="../css/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="background:#330066" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">UEAB Student-Lecturer Evaluation System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- <li class="dropdown"> -->
                    <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#"> -->
                        <!-- <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i> -->
                    <!-- </a> -->
                    <!-- <ul class="dropdown-menu dropdown-user"> -->
                        
                        <!-- <li><a href="dashboard.php?info=update_password"><i class="fa fa-gear fa-fw"></i>Change Password</a> -->
                        <!-- </li> -->
                        <li class="divider"></li>
                        <li style="color:#ffffff"><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    <!-- </ul> -->
                    <!-- /.dropdown-user -->
                <!-- </li> -->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" style="background:#330066" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        

                    
                    
						<li>
                            <a href="#"><i class="fa fa-download fa-fw"></i>Downloads<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard.php?info=declaration"><i class="fa fa-download fa-fw"></i> Declaration Form</a>
                                </li>
								 <!-- <li>
                                    <a href="dashboard.php?info=show_faculty"><i class="fa fa-eye"></i> Manage faculty</a>
                                </li> 
                                 <li>
                                    <a href="dashboard.php?info=detail_lec"><i class="fa fa-book"></i> faculty Details</a>
                                </li> 
                                <li>
                                    <a href="dashboard.php?info=print_faculty"><span class="glyphicon glyphicon-print"></span> Print Lecturer List</a>
                                </li>                           -->
							</ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
						
						
						
		
		<!-- feedback-->
		
                             
<li><a href="dashboard.php?info=block"><i class="fa fa-eye"></i> Blocked Students</a></li>

		<!--feedback end-->

						
                                                 
								 <li>
                                    <a href="dashboard.php?info=display_semester_courses"><i class="fa fa-book fa-fw"></i> Courses</a>
                                </li> 				
                              <li>
                                    <a href="dashboard.php?info=add_student_courses"><i class="fa fa-plus fa-fw"></i> Add student Courses</a>
                                </li>

                     
                        <li><a href="calendar.php"><i class="fa fa-calendar fa-fw"></i>Calendar</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw">Logout</i></a></li>
				        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                	<?php 
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
									if($info=="declaration")
										{
											include('declaration.php');
										}
										
									elseif($info=="block")
										{
											include('block.php');
										}
										elseif($info=="contact")
										{
											include('contact.php');
										}
                                        
                                        elseif($info=="search_course")
										{
											include('search_course.php');
										}
									elseif($info=="edit_faculty")
										{
											include('edit_faculty.php');
										}	
										
									elseif($info=="display_student")
										{
											include('display_student.php');
										}
									
                                        elseif($info=="check")
                                        {
                                            include('check.php');
                                        }	

                                        elseif($info=="feed_me")
                                    {
                                        include('feed_me.php');
                                    }	

                                        elseif($info=="hod")
                                    {
                                        include('hod.php');
                                    }	
                                        elseif($info=="calendar")
                                    {
                                        include('calendar.php');
                                    }	
                                    elseif($info=="wine")
                                    {
                                        include('wine.php');
                                    }	

									elseif($info=="add_major")
                                    {
                                        include('add_major.php');
                                    }	

                                    elseif($info=="add_hod")
                                    {
                                        include('add_hod.php');
                                    }

                                    elseif($info=="display_hod")
                                    {
                                        include('display_hod.php');
                                    }
                                     elseif($info=="search_hod")
                                    {
                                        include('search_hod.php');
                                    }
                                      elseif($info=="edit_hod")
                                    {
                                        include('edit_hod.php');
                                    }
                                      elseif($info=="delete_hod")
                                    {
                                        include('delete_hod.php');
                                    }
                                    elseif($info=="search_lec")
                                    {
                                        include('search_lec.php');
                                    }
                                     elseif($info=="detail_lec")
                                    {
                                        include('detail_lec.php');
                                    }
                                     elseif($info=="search_lecturer")
                                    {
                                        include('search_lecturer.php');
                                    }
                                     elseif($info=="vv_lec")
                                    {
                                        include('vv_lec.php');
                                    }

                                    elseif($info=="ssblock")
                                    {
                                        include('ssblock.php');
                                    }

                                    elseif($info=="empty_semester_courses")
                                    {
                                        include('empty_semester_courses.php');
                                    }
                                  
                                    elseif($info=="search_cs")
                                    {
                                        include('search_cs.php');
                                    }	

                                    elseif($info=="search_say")
                                    {
                                        include('search_say.php');
                                    }	

                                    elseif($info=="lee")
                                    {
                                        include('lee.php');
                                    }	
                                    elseif($info=="search_y")
                                    {
                                        include('search_y.php');
                                    }	

                                    elseif($info=="search_major")
                                    {
                                        include('search_major.php');
                                    }	
                                  
                                    elseif($info=="search_student")
                                    {
                                        include('search_student.php');
                                    }	
                                    elseif($info=="search_faculty")
                                    {
                                        include('search_faculty.php');
                                    }	
                                    elseif($info=="search_department")
                                    {
                                        include('search_department.php');
                                    }	
                                    elseif($info=="search_school")
                                    {
                                        include('search_school.php');
                                    }	
                                  
                                    elseif($info=="edit_student")
                                    {
                                        include('edit_student.php');
                                    }	

                                    elseif($info=="full")
                                    {
                                        include('full.php');
                                    }	
                                    elseif($info=="class")
                                    {
                                        include('class.php');
                                    }	
                                    elseif($info=="edit_students")
                                    {
                                        include('edit_students.php');
                                    }	
                                    elseif($info=="add_admin")
                                    {
                                        include('add_admin.php');
                                    }	
                                    elseif($info=="edit_admin")
                                    {
                                        include('edit_admin.php');
                                    }

                                    elseif($info=="say")
                                    {
                                        include('say.php');
                                    }

                                    elseif($info=="print_faculty")
                                    {
                                        include('print_faculty.php');
                                    }

                                    elseif($info=="print_student")
                                    {
                                        include('print_student.php');
                                    }
                                    elseif($info=="print_semester_courses")
                                    {
                                        include('print_semester_courses.php');
                                    }
                                    
                                    elseif($info=="delete_admin")
                                    {
                                        include('delete_admin.php');
                                    }
                                    elseif($info=="full_results")
                                    {
                                        include('full_results.php');
                                    }

                                    elseif($info=="ref_results")
										{
											include('ref_results.php');
                                        }

                                    elseif($info=="display_admin")
                                    {
                                        include('display_admin.php');
                                    }

                                    elseif($info=="add_student")
                                    {
                                        include('add_student.php');
                                    }	

                                    elseif($info=="edit_major")
                                    {
                                        include('edit_major.php');
                                    }	

                                    elseif($info=="delete_major")
                                    {
                                        include('delete_major.php');
                                    }	

									elseif($info=="display_major")
                                    {
                                        include('display_major.php');
                                    }	

                                    elseif($info=="add_semester_courses")
                                    {
                                        include('add_semester_courses.php');
                                    }	
                                        
                                    elseif($info=="edit_semester_courses")
                                    {
                                        include('edit_semester_courses.php');
                                    }	

                                    elseif($info=="delete_semester_courses")
                                    {
                                        include('delete_semester_courses.php');
                                    }	

									elseif($info=="display_semester_courses")
                                    {
                                        include('display_semester_courses.php');
                                    }	
                                    	
									elseif($info=="edit_courses")
                                    {
                                        include('edit_courses.php');
                                    }	
                                        
                                    	
									elseif($info=="delete_courses")
                                    {
                                        include('delete_courses.php');
                                    }	

                                    elseif($info=="sorted_results")
                                    {
                                        include('sorted_results.php');
                                    }	

                                    elseif($info=="view_courses")
                                    {
                                        include('view_courses.php');
                                    }	

									elseif($info=="add_student_courses")
										{
											include('add_student_courses.php');
										}	
									elseif($info=="feedback")
										{
											include('feedback.php');
										}
										elseif($info=="feedback_average")
										{
											include('feedback_average.php');
										}		
										
										
                                        elseif($info=="add_courses")
										{
											include('add_courses.php');
                                        }
                                        elseif($info=="display_courses")
										{
											include('display_courses.php');
                                        }
                                        elseif($info=="add_school")
										{
											include('add_school.php');
                                        }
                                        elseif($info=="a")
										{
											include('a.php');
                                        }
                                        elseif($info=="b")
										{
											include('b.php');
                                        }
                                        elseif($info=="c")
										{
											include('c.php');
                                        }
                                          elseif($info=="d")
										{
											include('d.php');
                                        }

                                        elseif($info=="edit_school")
										{
											include('edit_school.php');
                                        }

                                        elseif($info=="delete_school")
										{
											include('delete_school.php');
                                        }

                                        elseif($info=="edit_department")
										{
											include('edit_department.php');
                                        }

                                        elseif($info=="delete_department")
										{
											include('delete_department.php');
                                        }

                                        elseif($info=="display_school")
										{
											include('display_school.php');
                                        }
                                        elseif($info=="add_department")
										{
											include('add_department.php');
                                        }
                                        elseif($info=="display_department")
										{
											include('display_department.php');
										}
										
										
										
										else if($info=="update_password")
										{
										include('update_password.php');
										}
									
								}
								else
								{
								include('dashboard_home.php');
								}
							
							
							?>
				
				</div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>

</body>

</html>
