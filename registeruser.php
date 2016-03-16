<?php
include("db/dbc.php");




$name = $_POST['name'];
$noic = $_POST['noic'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$result1 = mysqli_query($conn,"SELECT * FROM users WHERE noic='$noic' ");
if($num = mysqli_num_rows($result1)) {
	echo "<script>	
					alert(' This Identitication Number is already registered');
					window.location.href='register.php'; 
		</script>";
}

	
else {

$sql = "INSERT INTO users (name, noic, nohp, email, username, password) VALUES ('$name', '$noic', '$nohp', '$email', '$username', '$password')";
$result = mysqli_query($conn,$sql) or die ('Error updating database' . mysqli_error($conn));


if ($result){
			?>
			<script type="text/javascript">
			alert('Registration Successful');
			window.location.href='index.php'; 
			</script>
	<?php
				
				}
				
			else {
			 echo mysqli_error(); 
				;}
					}
			?>