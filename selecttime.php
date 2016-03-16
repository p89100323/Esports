<?php
	include("db/dbc.php");
	if (!isset($_SESSION)){
    session_start();
}
    $sdate = $_SESSION['sdate'];
    $scourt = $_SESSION['scourt'];
    $ssport = $_SESSION['ssport'];

    
   $bdate1 = date ("l, Y/m/d",strtotime("$sdate"));
    //$bdate = date ("Y-m-d",strtotime("$sdate"));


                       //                     echo $bdate1;
    
   // $date = date_create('2000-01-01');
   // echo date_format($date, 'Y-m-d H:i:s');

	//If your session isn't valid, it returns you to the login screen for protection

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.standalone.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.standalone.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker3.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker3.standalone.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker3.standalone.min.css">
        <script src="js/main.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        
    <title>Sport Facilities Booking System</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="nav-md" >
    <div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="home.php" class="site_title"> <span>SJK(C)LI CHI</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <div class="profile">             
                            <span>Sport Facilities Booking System</span>
                    </div>
                    <br/>
					
					<!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3></h3>
                            <ul class="nav side-menu">
                                <li>
									<a  href="home.php"><i class="fa fa-home"></i> Main</a>
                                </li>
                                <li>
									<a  href="userstatus.php"><i class="fa fa-user"></i> Status</span></a>
                                </li>                               
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <ul class="nav pull-right">
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                
            <!-- /top navigation -->


            

                <!-- top tiles -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>List of Available Time</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- Display errors in del_errors stack if any and unset once done -->  
                                <div class="x_content">
                                    
                                    
                                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th class="column-title" style="text-align: center;">Time</th>
                                            </tr>
                                   </thead>
                                        <tbody>
                                                      
                                        <tr>
                                           <form action="checkcourt.php" method="post" name="form2" target="_self" id="form2">
                                          
                                            <?php 
                                            
                                          /*  echo $ssport."<br>";
                                            echo $scourt."<br>";
                                            echo $sdate."<br>";
                                            echo $bdate1."<br>";
                                            

                                                   $result1 = mysqli_query($conn,"SELECT * FROM courts where courtid = '$scourt'");
                                                   if ($row=mysqli_fetch_array($result1)) {
                                                          
                                                           echo "$row[court]"."<br>";
                                                    }

                                                    $result1 = mysqli_query($conn,"SELECT * FROM sports where bil = '$ssport'");
                                                   if ($row=mysqli_fetch_array($result1)) {
                                                          
                                                           echo "$row[sport]";
                                                    }
                                                   */
                                              
      
                                                    $result1 = mysqli_query($conn,"SELECT * FROM booking WHERE bcourt='$scourt' AND bdate = '$sdate' AND btime = 1 AND bsport = '$ssport' ");
                                                    if($num = mysqli_num_rows($result1)) {
                                                ?>
                                                <td align="center" bgcolor="FFCC00">8am-10am<br>Booked</td>
                                                <?php } else { ?>
                                                <td align="center" bgcolor="B3B3D7">8am-10am<br><a href="confirmbooking.php?btime=1&sdate=<?php echo $sdate ?>">Book</a></td> <?php }?>

                                            </tr>
                                            <tr>
                                                
                                                <?php 
                                                    $result2 = mysqli_query($conn,"SELECT * FROM booking WHERE bcourt='$scourt'  AND bdate = '$sdate' AND btime = 2 AND bsport = '$ssport'");
                                                    if($num = mysqli_num_rows($result2)){
                                                ?>
                                                <td align="center" bgcolor="FFCC00">10am-12pm<br>Booked</td>
                                                <?php } else { ?>
                                                <td align="center" bgcolor="B3B3D7">10am-12pm<br><a href="confirmbooking.php?btime=2&sdate=<?php echo $sdate ?>">Book</a></td> <?php } ?>
                                            </tr>
                                            <tr>
                                                
                                                <?php 
                                                    $result3 = mysqli_query($conn,"SELECT * FROM booking WHERE bcourt='$scourt'  AND bdate = '$sdate' AND btime = 3 AND bsport = '$ssport'");
                                                    if($num = mysqli_num_rows($result3)){
                                                ?>
                                                <td align="center" bgcolor="FFCC00">2pm-4pm<br>Booked</td>
                                                <?php } else { ?>
                                                <td align="center" bgcolor="B3B3D7">2pm-4pm<br><a href="confirmbooking.php?btime=3&sdate=<?php echo $sdate ?>">Book</a></td> <?php } ?>
                                            </tr>
                                            
                                            <tr>
                                                
                                                <?php 
                                                    $result4 = mysqli_query($conn,"SELECT * FROM booking WHERE  bcourt='$scourt'  AND bdate = '$sdate' AND btime = 4 AND bsport = '$ssport'");
                                                    if($num = mysqli_num_rows($result4)){
                                                ?>
                                                <td align="center" bgcolor="FFCC00">4pm-6pm<br>Booked</td>
                                                <?php } else { ?>
                                                <td align="center" bgcolor="B3B3D7">4pm-6pm<br><a href="confirmbooking.php?btime=4&sdate=<?php echo $sdate ?>">Book</a></td> <?php } ?>
                                            </tr>
                                            <tr>
                                                
                                                <?php 
                                                    $result5 = mysqli_query($conn,"SELECT * FROM booking WHERE  bcourt='$scourt'  AND bdate = '$sdate' AND btime = 5 AND bsport = '$ssport'");
                                                    if($num = mysqli_num_rows($result5)){
                                                ?>
                                                <td align="center" bgcolor="FFCC00">6pm-8pm<br>Booked</td>
                                                <?php } else { ?>
                                                <td align="center" bgcolor="B3B3D7">6pm-8pm<br><a href="confirmbookingphp?btime=5&sdate=<?php echo $sdate ?>">Book</a></td> <?php } ?>
                                            </tr>
                                            <tr>
                                                
                                                <?php 
                                                    $result6 = mysqli_query($conn,"SELECT * FROM booking WHERE  bcourt='$scourt'  AND bdate = '$sdate' AND btime = 6 AND bsport = '$ssport'");
                                                    if($num = mysqli_num_rows($result6)){
                                                ?>
                                                <td align="center" bgcolor="FFCC00">8pm-10pm<br>Booked</td>
                                                <?php } else { ?>
                                                <td align="center" bgcolor="B3B3D7">8pm-10pm<br><a href="confirmbooking.php?btime=6&sdate=<?php echo $sdate ?>">Book</a></td> <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

    </div>
    </div>

            </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
	
	<script src="js/custom.js"></script>
    <!-- /footer content -->
</body>

</html>