<?php
   define('HOST','localhost');
   define('PWD','');
   define('USERNAME','root');
   define('DB','notifications');
   
   $conn = mysqli_connect(HOST,USERNAME,PWD,DB);
   if($conn){
       return $conn;
   }else{
       echo "Connect problem".mysqli_connect_error();
   }

?>