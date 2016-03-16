<?php
include("db/dbc.php");
session_start();



$name = $_POST['name'];
$nohp = $_POST['nohp'];
$bsport = $_POST['bsport'];
$btime = $_POST['btime'];
$bdate = $_POST['bdate'];
$bcourt = $_POST['bcourt'];


	   

$sql = "INSERT INTO booking (bdate, btime, bcourt, bsport, name, nohp) VALUES ('$bdate', '$btime', '$bcourt', '$bsport', '$name', '$nohp')";
$result = mysqli_query($conn,$sql) or die ('Error updating database' . mysqli_error($conn));


if ($result){
			?>
			<script type="text/javascript">
			alert('Booking Successful');
			window.location.href='home.php'; 
			</script>
	<?php
				
				}
				
			else {
			 echo mysqli_error(); 
				;}
			
			
			
			?>
