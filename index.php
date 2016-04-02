<?php 
	session_start();
	
	//If already logged in, head to home page
	if(!empty($_SESSION['bil'])){
		echo "<script>alert('You haven Logout.'); window.location.href= 'home.php';</script>";
		
	}
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
    <link rel="stylesheet" href="css/table.css">
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
		<h3 style="text-align:center;"><strong>User Login</strong></h2>
  
		<div class="row">
			<div class="col-md-6  col-md-offset-3">
				<form class="form-signin" method="POST" action="checklogin.php">
					<label for="username" class="sr-only">username</label>
					<input name="username" type="text" id="username" class="form-control" placeholder="Username"  autofocus="" autocomplete="off" style="cursor: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
					<br>
					<label for="password" class="sr-only">password</label>
					<input name="password" type="password" id="password" class="form-control" placeholder="Password"  autocomplete="off" style="cursor: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
					
					<!-- echo errors if any and unset once done -->
					<?php if (isset($_SESSION['errors'])): ?>
						<div class="form-errors">
							<?php foreach($_SESSION['errors'] as $error): ?>
							<p><?php echo $error ?></p>
						</div>
					<?php endforeach; ?>
					
					<?php unset($_SESSION['errors']); endif;?>
					<br>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
				</form>
				<center><a href="register.php" name='open' class='text-center btn btn-sm btn-link'>Register</a></center>
			</div>
		</div>
    </div> <!-- /container -->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="	js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
