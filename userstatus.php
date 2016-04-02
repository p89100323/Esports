<?php
	include("db/dbc.php");
	session_start();
	//If your session isn't valid, it returns you to the login screen for protection
    if(empty($_SESSION['bil'])){
     header("location:access-denied.php");
   }

       
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
        <link rel="stylesheet" href="css/table.css">
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
                                    <h2>Status</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- Display errors in del_errors stack if any and unset once done -->  
                                <div class="x_content">
                                    
                                    
                                    <table class="rwd-table">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th colspan="9" class="column-title" style="text-align: center;">Record</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <tr >
                                            <th>Bil</th>
                                            <th>Sport</th>
                                            <th>Court</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Price</th>
                                            <th>Payment Slip</th>
                                            <th>Status</th>
                                            
                                          </tr>
                                        <?php                                                            
                                        include("db/dbc.php");
                                        $sql= "SELECT * FROM booking where name = '$_SESSION[name]'";
                                        $result=mysqli_query($conn, $sql);
                                        if (!$result) { 
                                            die('Invalid query: ' . mysql_error());
                                        }
                                        $i=0; 
                                        while ($row=mysqli_fetch_array($result)){
                                            $bil = $row['bil'];
                                            $bsport = $row['bsport'];
                                            $bcourt = $row['bcourt'];
                                            $bdate = $row['bdate'];
                                            $btime = $row['btime'];
                                            $price = $row['price'];
                                            $bstatus = $row['bstatus'];
                                            
                                            $file_path = $row['file_path'];
                                        $i++;  
                                                                        
                                        ?>   

                                           <tr>
                                            <td data-th = "Bil"><?php echo $i;?></td>
                                            <td data-th = "Sport"><?php 
                                                $result1 = mysqli_query($conn,"SELECT * FROM sports where bil=$bsport");
                                                    if ($row=mysqli_fetch_array($result1)) ?><?php echo $row{'sport'} ?></td>
                                            <td data-th = "Court"><?php 
                                                $result1 = mysqli_query($conn,"SELECT * FROM courts where courtid=$bcourt");
                                                   if ($row=mysqli_fetch_array($result1))?><?php echo $row{'court'}?></td>
                                            <td data-th = "Date"><?php echo $bdate?></td>
                                            <td data-th = "Time"><?php 
                                                $result1 = mysqli_query($conn,"SELECT * FROM bookingtime where bil=$btime");
                                                   if ($row=mysqli_fetch_array($result1))?><?php echo $row{'abtime'}?></td>
                                            <td data-th = "Price"><?php echo $price?></td>

                                               
                                            <?php 
                                                $result1 = mysqli_query($conn,"SELECT file_name FROM booking where file_path != ''");
                                                   if ($file_path != "") {
                                                ?>
                                                <td  data-th = "Payment Slip"><?php echo $file_path?></td>
                                            
                                             <?php } else { ?>
                                                 <td>   <form enctype="multipart/form-data" action="saveupload.php" method="POST">
                                                    
                                                    <p>
                                                        <input type="file" name="file" >
                                                    </p>
                                                    <p>
                                                        <input type="submit" name="submit" value="Upload file" style="background:grey;">
                                                    </p>
                                                        
                                                    </form></td>
                                                    <?php }?> 

                                            <td data-th = "Status"><?php echo $bstatus?></td>
                                            <?php 
                                                $result1 = mysqli_query($conn,"SELECT bstatus FROM booking where bstatus like 'Approved'");
                                                   if ($bstatus == "Approved") {
                                                ?>
                                            
                                                <td align="center">        </td>
                                                <?php } else { ?>
                                             <td><a href="delete.php?bil=<?php echo $bil;?>">Delete</a> </td>
                                             <?php }?>  

                                           </tr>
                                          <?php 
                                        }
                                    mysqli_close($conn);
                                    ?>
                                     <tr>
                                           
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