<?php
 extract($_POST);
  $conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

    $user= $_SESSION['user'];
 $con=mysqli_query($conn,"select * from user where email='$user'");

$res=mysqli_fetch_assoc($con);	 
    
$n= @$res['studentid'];


if(isset($_POST["export"])){

    $conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
    header('Content-Type:text/CSV; charset=utf-8');
    header('Content-Disposition:attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('course_id', 'course_name', 'group', 'department_offered','offered_by'));
    $query= "SELECT `course_id`, `course_name`, `group`, `department_offered`, `offered_by` from user_selected_courses where student_id='$n' ORDER BY id DESC";
    $result= mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result))
    {
fputcsv($output, $row);

    }
fclose($output);

}

?>