<?php
	include("db/dbc.php");
	session_start();

	// Defining your login details into variables
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	// MySQL injection protections
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);
	//$encrypted_mypassword=md5($mypassword); //MD5 Hash for security
	$tbl_name="users"; // Table name

	//Query data for login
	$sql="SELECT * FROM $tbl_name WHERE username='$username' AND password='$password'" or die(mysqli_error());
	$result=mysqli_query($conn, $sql) or die(mysqli_error());

	// Checking results rows
	$count=mysqli_num_rows($result);
	// If username and password is a match, the count will be 1

	if($count==1){
		$user = mysqli_fetch_assoc($result);
		$_SESSION['bil'] = $user['bil'];
		$_SESSION['categori'] 	  = $user['categori'];
		$_SESSION['name']   = $user['name'];
		$_SESSION['noic'] 		  = $user['noic'];
		$_SESSION['nohp'] 		  = $user['nohp'];
		$_SESSION['email'] 		  = $user['email'];
		
		if ($user['categori'] == 'admin')
		{
			
			header("Location:admin_notice.php");
		}
		
		else if ($user['categori'] == 'customer') 
		{
			
			header("Location:home.php");
		}
		
	}
	//If the username or password is wrong, you will receive this message below.
	else {
		$_SESSION['errors'] = array("&nbsp;&nbsp;Incorrect Username 
		or Password.");
		header("Location:index.php");
	}
?>