<?php
include("db/dbc.php");
session_start();

$sdate= $_POST['sdate'];
$ssport= $_POST['ssport'];

$_SESSION['sdate']=$sdate;
$_SESSION['ssport']=$ssport;

$sql = "SELECT noticedate,sport FROM announcements,sports";
$result=mysqli_query($conn, $sql) or die("fail");


while ($row=mysqli_fetch_array($result)) {
if(($sdate) == $row['noticedate']) {
echo "<script>
					alert('Date is not available');
					alert('Please select another date');
					window.location.href='home.php'; 
		</script>";
		
		
}}
 if(trim($ssport) == '1') {
echo "<script>
					
					window.location.href='badmintoncourt.php'; 
		</script>";
}
else if(trim($ssport) == '2') {
echo "<script>
					
					window.location.href='basketballcourt.php'; 
		</script>";
}
else if(trim($ssport) ==  	'3') {
echo "<script>
					
					window.location.href='footballcourt.php'; 
		</script>";
}


?>

