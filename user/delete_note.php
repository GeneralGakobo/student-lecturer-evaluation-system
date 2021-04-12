<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from notifications where id='$info'");
	header('location:index.php?info=notification');

	echo "<script>


  swal({
  title: 'Done!',
  text:'password updated succesfully',
  icon: 'success',
  
});

</script>
";
?>