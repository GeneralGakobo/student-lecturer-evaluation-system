<?php
$conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());

$val = $_GET["value"];
$val_M = mysqli_real_escape_string($conn, $val);
$sql="SELECT school, department_name FROM departments WHERE school='$val_M'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    echo "<select>";

    while($rows = mysqli_fetch_assoc($result)){
        echo"<option>".$rows["department_name"]."</option>";
    }
    echo"</select>";
}

?>