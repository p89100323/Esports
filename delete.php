<?php
include("db/dbc.php");
	session_start();

	$bil = $_REQUEST['bil'];

	

	$sql = "DELETE FROM booking WHERE bil = '$bil'";
	$result = mysqli_query($conn,$sql) or die ('Error updating database' . mysqli_error($conn));
	if($result) {
	echo "<script>
					alert(' Deleted');
					window.location.href='userstatus.php';
					
		</script>";
      
	}
	else {
		echo "Delete Fail";
	}
	?>