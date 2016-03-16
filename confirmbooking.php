<?php
	include("db/dbc.php");
	session_start();
	//If your session isn't valid, it returns you to the login screen for protection
    if(empty($_SESSION['bil'])){
     header("location:access-denied.php");
    }
    $sdate = $_REQUEST['sdate'];
    $btime = $_REQUEST['btime'];
    $sdate = $_SESSION['sdate'];
    $scourt = $_SESSION['scourt'];
    $ssport = $_SESSION['ssport'];
    $bdate1 = date ("l, Y/m/d",strtotime("$sdate"));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sport Facilities Booking System</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
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
                                    <h2>Booking Detail</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- Display errors in del_errors stack if any and unset once done -->  
                                <div class="x_content">

                                <form action="savebooking.php" method="post" name="form2" target="_self" id="form2"> 
                                  <table width="500" class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th colspan="2" class="column-title" style="text-align: center;">Booking Form                                                </th>
                                            </tr>
                                        

                                        <tbody>
                                           <tr>
                                           <td width="233" style="text-align: right;"><div align="right">Date:</div></td>                                           
                                          <td width="255" style="text-align: left;"><div align="left"><?php echo "$bdate1" ?>
                                            <input type="hidden" name="bdate" value="<?php echo "$sdate" ?>"> 
                                            </div></td>
                                           </tr>
                                           <tr>
                                           <td style="text-align: right;"><div align="right">Time:</div></td>  
                                           <?php 
                                                $result1 = mysqli_query($conn,"SELECT * FROM bookingtime where bil = '$btime'");
                                                   if ($row=mysqli_fetch_array($result1))?> 
                                             <td style="text-align: left;"><div align="left"><?php echo "$row[abtime]"; ?>
                                               <input type="hidden" name="btime" value="<?php echo "$row[bil]"; ?>">
                                             </div></td>
                                           </tr>
                                            <tr>
                                            <td style="text-align: right;"><div align="right">Sport:</div></td>  
                                           <?php 
                                                $result1 = mysqli_query($conn,"SELECT * FROM sports where bil = '$ssport'");
                                                   if ($row=mysqli_fetch_array($result1))?> 
                                             <td style="text-align: left;"><div align="left"><?php echo "$row[sport]"; ?>
                                               <input type="hidden" name="bsport" value="<?php echo "$row[bil]"; ?>">
                                             </div></td>
                                           </tr>
                                           <tr>
                                           <td style="text-align: right;"><div align="right">Name:</div></td>  
                                            <td style="text-align: left;"><div align="left"><?php echo $_SESSION['name']; ?>
                                              <input type="hidden" name="name" value="<?php echo $_SESSION['name']; ?>">
                                            </div></td>
                                           </tr>
                                           <tr>
                                           <td style="text-align: right;"><div align="right">Mobile:</div></td>  
                                            <td style="text-align: left;"><div align="left"><?php echo $_SESSION['nohp']; ?>
                                              <input type="hidden" name="nohp" value="<?php echo $_SESSION['nohp']; ?>">
                                            </div></td>
                                           </tr>                                           
                                           <tr>
                                           <td style="text-align: right;"><div align="right">Court:</div></td>  
                                           <?php 
                                                $result1 = mysqli_query($conn,"SELECT * FROM courts where courtid = '$scourt'");
                                                   if ($row=mysqli_fetch_array($result1))?> 
                                             <td sstyle="text-align: left;"><div align="left"><?php echo "$row[court]"; ?>
                                               <input type="hidden" name="bcourt" value="<?php echo "$row[courtid]";?>">
                                             </div></td>
                                              
                                           </tr>
                                           <tr>
                                           <td colspan="2" style="text-align: center;"> <input type="submit" name="Submit" value="Confirm" /> <a href="home.php"><input type="button" name="buttoncancel" value="Cancel" /></a></td>
                                           </tr>
                                            
                                        </tbody>

                                    </table>
                                    </form>
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