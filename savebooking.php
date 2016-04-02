	<?php
include("db/dbc.php");
session_start();



$name = $_POST['name'];
$nohp = $_POST['nohp'];
$noic = $_SESSION['noic'];
$bsport = $_POST['bsport'];
$btime = $_POST['btime'];
$bdate = $_POST['bdate'];
$bcourt = $_POST['bcourt'];
$price = $_POST['price'];


 $sql= "SELECT * FROM booking where noic = '$noic'";
                                        $result=mysqli_query($conn, $sql);
                                        if (!$result) { 
                                            die('Invalid query: ' . mysql_error());
                                        }
                                        $available = true;  
                                        while ($row=mysqli_fetch_array($result)){
                                         $bstatus = $row['bstatus'];
                                        
                                      
                                  
if ($bstatus == 'Pending'){

	$available= false;
	?>
			<script type="text/javascript">
			 alert('You have Pending Request'); 
			 window.location.href='userstatus.php'; 
			</script>


			<?php 
			

						}
						}
				
			if($available)
				$sql = "INSERT INTO booking (bdate, btime, bcourt, bsport, name, nohp, price, noic) VALUES ('$bdate', '$btime', '$bcourt', '$bsport', '$name', '$nohp', '$price', '$noic')";
				mysqli_query($conn,$sql) or die ('Error updating database' . mysqli_error($conn));

				?>
			<script type="text/javascript">
			alert('Booking Successful ');
			window.location.href='userstatus.php'; 
			</script>
			<?php


?>