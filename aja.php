<?php

if(isset($_GET['departments']) && !empty($_GET['departments'])){

    $conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error('db error'));

    $id = $_GET['departments'];

    $query = "SELECT * FROM majors where con_id='$id'";
    $do = mysqli_query($conn, $query);
    $count = mysqli_num_rows($do);

    if($count > 0){
        while($row = mysqli_fetch_array($do)){

            echo "<option value='".$row['major_name']."'>".$row['major_name']."</option>";

        }

    } else{
        echo '<option>No major available</option>';
    }


} else{
    echo "<h3>Error</h3>";
}

?>