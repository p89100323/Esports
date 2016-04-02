<?php
include("db/dbc.php");
session_start();



$notice = $_POST['notice'];
$ndate = $_POST['ndate'];

$sql = "INSERT INTO announcements (noticedate, notice) VALUES ('$ndate', '$notice')";
$result = mysqli_query($conn,$sql) or die ('Error updating database' . mysqli_error($conn));


if ($result){
			?>
			<script type="text/javascript">
			alert('Updated');
			window.location.href='admin_notice.php'; 
			</script>
	<?php
				
				}
				
			else {
			 echo mysqli_error(); 
				;}
			
			
			
			?>