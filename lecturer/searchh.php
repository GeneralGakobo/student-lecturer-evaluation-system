

	<?php
	 mysqli_connect("localhost","root","","ueab")or die(mysqli_error());
	 $output = '';
	 if(isset($_POST['search'])){
		 $searchq = $_POST['search'];
		 $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

		 $query = mysqli_query("SELECT * FROM schools WHERE school_id LIKE '%$searchq%' OR school_name LIKE '%$searchq%'") or die("could not search!");
	 $count = mysqli_num_rows($query);
	 if($count == 0){
		 $output = 'Search results not found';
	 }else{
		 while($row = mysqli_fetch_array($query)){
			 $bag = $row['school_id'];
			 $bad = $row['school_name'];
			 $id = $row['id'];

			 $output .= '<div> '.$bag.' '.$bad.' </div>';
		 }

	 }
	 }	
	
	?>
<center>
	<div class="vv" style="margin-top:50px;">
	<form action="" method="POST">
	<input type="text" name="search" placeholder="Enter Evaluation Ref Id">
	<input type="submit" value=">>" />
	</form>
	</div>
	</center>

	<?php print("$output"); ?>