<?php
include("db/dbc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sport Facilities Booking System</title>
    <meta name="description" content="Sport Facilities Booking System">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.html">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">

    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.html">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!--Google Font-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">

	 <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

	<script language="JavaScript" src="js/user.js"></script>
</head>
<body>
	<div id="header" class="text-center" style="font-family: 'Raleway', Arial, sans-serif;">
        <h1 style="font-size: 40px;font-weight: 800;text-transform: uppercase;">
		WELCOME TO SJK(C)Li CHI</h1>
        <h3 style="font-size: 28px;font-weight: 600;">
		SPORT FACILITIES BOOKING SYSTEM</h3>
    </div>
	
	<br>
	<div class="container">
		
		<br><br>
		<h3 style="text-align:center;"><strong>User Registration</strong></h2>
  
		<div class="row">
			<div class="col-md-6  col-md-offset-3">
				<form class="registeration" method="POST" action="registeruser.php">
				 
					 <table class="table table-striped responsive-utilities jambo_table bulk_action">
                           <tbody>
                             
                                        <tr>
            <td width="98" >Name:</td>
            <td width="462"  >
              <input type="name" name="name" pattern="[A-Za-z]{3,}" required title="Please enter your Name Here, must contain only Character Values Here">
            </td>
          </tr>
           <tr>
            <td >NoIc:</td>
            <td>
              <input type="noic" name="noic" maxlength="12" pattern="(?=.*\d).{12}" required title="Please enter your Identification Number Here, must contain only Numeric Values Here">
              *without(-)
             </td>
          </tr>
          <tr>
            <td >NoHp:</td>
            <td>
               <input type="nohp" name="nohp" maxlength="12" pattern="(?=.*\d).{10,12}" required title="Please enter your Phone Number Here, must contain only Numeric Values Here">
            *without(-) </td>
          </tr>
          <tr>
            <td >Email:</td>
            <td>
              <input type="email" required title="" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </td>
          </tr>
          <tr>
            <td >Username:</td>
            <td>
               <input type="username"  maxlength="20" name="username" pattern="[A-Za-z]{8,20}" required title="Please enter your Username Here, at least 8 or more characters">
            </td>
          </tr>
          <tr>
            <td >Password:</td>
            <td>
              <input type="password"   maxlength="20" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </td>
          </tr>
          <tr>
            <td ></td>
            <td>          
              <input name="submit" size="20" type="submit" id="submit" value="Register" />
              <a href="index.php">
               <input  size="20" type="button" id="submit" value="Cancel" /></a>
            </td
          ></tr>
                                        </tbody>
                                    </table>
				</form>
				
			</div>
		</div>
    </div> <!-- /container -->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="	js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
