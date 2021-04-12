
	<?php

	 if(isset($_POST['search']))
    {    $conn=mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
        

         $id = $_POST['id'];
		
		 $query = "SELECT `school_id`, `school_name` FROM schools WHERE `id`=$id LIMIT 1";
         $result=mysqli_query($conn, $query);
	
	 
		 while($row = mysqli_fetch_array($result)){
			 $bag = $row['school_id'];
			 $bad = $row['school_name'];
             
             
         }
         $result = '<div>'.$result.'</div';
         mysqli_close($conn);
    }
        else{
          $bag="";
          $bad="";
}
    
	
	?>
<center>
	<div class="vv" style="margin-top:100px;">
	<form action="" method="POST">
	<!-- <input type="text" name="search" placeholder="Enter Evaluation Ref Id"> -->
	
    id:<input type="text" name="id"><br><br>
    school id:<input type="text" name="id"><br><br>
    school name:<input type="text" name="id"><br><br>
    <input type="submit" name="search" value=">>" />
    
	</form>
    
	</div>
	</center>

