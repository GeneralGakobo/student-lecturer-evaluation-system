<?php

if(isset($_GET['schools']) && !empty($_GET['schools'])){

    $conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error('db error'));

    $id = $_GET['schools'];

    $query = "SELECT * FROM departments where con_id='$id'";
    $do = mysqli_query($conn, $query);
    $count = mysqli_num_rows($do);

    if($count > 0){
        while($row = mysqli_fetch_array($do)){

               echo "<option value='".$row['id']."'>".$row['department_name']."</option>";

        }

    } else{
        echo '<option>No departments available</option>';
    }


} else{
    echo "<h3>Error</h3>";
}

?>