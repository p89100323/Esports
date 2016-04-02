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
        

        <script src="js/main.js"></script>
        
        
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
									<a  href="admin_notice.php"><i class="fa fa-home"></i>Update Notice</a>
                                </li>
                                <li>
									<a  href="manage_booking.php"><i class="fa fa-user"></i>Manage Booking</span></a>
                                </li>   
                                <li>
                                    <a  href="view_record.php"><i class="fa fa-user-md"></i>View Record</a>
                                </li>
                                <li>
                                    <a  href="keputusan.php"><i class="fa fa-list"></i>Generate Report</a>
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
                                    <h2>Announcement</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- Display errors in del_errors stack if any and unset once done -->  
                                <div class="x_content">
                                    
                                    
                                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th  colspan="2" class="column-title" style="text-align: center;">Update Notice</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                              
                                      <form action="updatenotice.php" method="post" name="updatenotice" target="_self" id="updatenotice">
                                      <tr>
                                            <td style="text-align: center;">Notice:</td>
                                            <td> <input required title="" class="form-control" name="notice" type="text"  /></td>
                                            
                                          </tr>
                                          
                                         <tr>
                                            <td style="text-align:center;"> Date: </td>                                           
                                            <td><input required title="You must select a date" class="datepicker" type="text" name="ndate">
                                                <script>
            
                                                    $(function(){
                                                        $('.datepicker').datepicker({
                                                            startDate: "today",
                                                            format: 'yyyy-mm-dd',
                                                            todayBtn: true,
                                                            autoclose: true,
                                                            todayHighlight: true
                                                        });
                                                    });
                                                </script>
                                                </td>
                                          </tr>
          
         

                                     <tr>
                                           <td colspan="2" style="text-align: center;"> 
                                           <input type="submit" name="Submit" value="Update" />
                                           </td>
                                            </form>
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