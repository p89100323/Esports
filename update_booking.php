<?php

include("db/dbc.php");
session_start();


$bil = $_REQUEST['bil'];


	$sql="UPDATE booking SET bstatus='Approved'	WHERE bil='$bil'";
	$result = mysqli_query($conn,$sql) or die ('Error updating database' . mysqli_error($conn));
	if($result) {
	
	echo"<script>
					alert('Approved');
					window.location.href='manage_booking.php'; 
		</script>";
	
}
else {
		echo "Update Fail";
	}
?>