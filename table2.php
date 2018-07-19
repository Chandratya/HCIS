<?php
session_start();
include "./session.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Employee Turn Over</title>

    <!-- Fontfaces CSS-->
    <link href="./css/font-face.css" rel="stylesheet" media="all">
    <link href="./vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="./vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="./vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="./vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="./vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="./vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="./vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="./vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="./vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="./vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="3">
                           <h4 style="color: ">HUMAN CAPITAL INFORMATION SYSTEM</h4>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <hr>
                    <h5>Man Power</h5>
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Chart</a>
                            
                        </li>
                         
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table" href="#"></i>Employee Data</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="table_mpe.php">Man Power Existing</a>
                                </li>
                                <li>
                                    <a href="table2.php">Employee Turn Over</a>
                                </li>
                            </ul>
                            <hr>
                            <h5>Form</h5>
                            <li class="">
                            <a class="js-arrow" href="dis_exit.php">
                                <i class="fas fa-table"></i>Exit Questioner</a>
                          
                            <li class="">
                            <a class="js-arrow" href="dis_int.php">
                                <i class="fas fa-table"></i>Exit Interview Form</a>
                        </li>


                        </li>
                        </li>
                        
                           
                        <hr>
                        <h5>Services</h5>
                        
                        
                        </li>
                        <li class="">
                            <a class="js-arrow" href="helpdesk.php">
                                <i class="fas fa-desktop"></i>Helpdesk</a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h4 style="color: ">HUMAN CAPITAL INFORMATION SYSTEM</h4>
                </a>
            </div>

            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <hr>
                    <h5>Man Power</h5>
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Chart</a>
                            
                        </li>
                         
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table" href="#"></i>Employee Data</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                    <a href="table_mpe.php">Man Power Existing</a>
                                </li>
                                <li>
                                    <a href="table2.php">Employee Turn Over</a>
                                </li>
                                                           </ul>
                                                           <hr>
                            <h5>Form</h5>
                            <li class="">
                            <a class="js-arrow" href="dis_exit.php">
                                <i class="fas fa-table"></i>Exit Questioner</a>
                          
                            <li class="">
                            <a class="js-arrow" href="dis_int.php">
                                <i class="fas fa-table"></i>Exit Interview Form</a>
                        </li>


                        </li>
                        </li>
                        
                           
                        <hr>
                        <h5>Services</h5>
                        
                        
                        </li>
                        <li class="">
                            <a class="js-arrow" href="helpdesk.php">
                                <i class="fas fa-desktop"></i>Helpdesk</a>
                        </li>
                    </ul>
                    <hr>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <p>Welcome, <?php 
                         if($getUser!=null){
                         echo $getUser['email'];
                         //echo " (".$status[$getUser['status']].")";
                         } 
                         ?> |
                           <a href="logout.php">Logout</a></p>
                            <div class="header-button">
                                
                                
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        
                            
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" onclick="$('#eto').tableExport({type:'excel',escape:'false'});" style="float: right; margin-right: 20px;"><button style="font-size: 9px" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="fa fa-list-alt"></i>Export to Excel</button></a>
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Employee Turn Over Data
                                    <div class="table-data__tool-right" style="float: right;">
                                        
                                        </div>
                                    </div>
                                </h3>

                                <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                   
                                    <?php
                                    # FileName="connect.php"
                                    $hostname = "localhost";
                                    $database = "hcis";
                                    $username = "root";
                                    $password = "";

                                    $connect = mysql_connect($hostname, $username, $password)
                                        or die('Could not connect: ' . mysql_error());
                                        //Select The database
                                        $bool = mysql_select_db($database, $connect);
                                        if ($bool === False){
                                           print "can't find $database";
                                        }

                                    $sql = 'SELECT nik_terminate, employee_name, reason, service_length, position_desc, department_desc, location_desc, month_resign, talent_flag FROM turn_over';
                                            
                                    $query = mysql_query($sql, $connect);

                                    if (!$query) {
                                        die ('SQL Error: ' . mysql_error($connect));
                                    }



                                    echo '<table id="eto" style="display: inline-block; overflow-y: scroll; max-height: 350px;" class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                <th>No </th>
                                                <th>NIK</th>
                                                <th>Name</th>
                                                <th>Reason</th>
                                                <th>Service Length</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Location</th>
                                                <th>Month Resign</th>
                                                <th>Talent Flag</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                          $i = 1;    
                                    while ($row = mysql_fetch_array($query))
                                    {
                                        echo '<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$row['nik_terminate'].'</td>
                                                <td>'.$row['employee_name'].'</td>
                                                <td>'.$row['reason'].'</td>
                                                <td>'.$row['service_length'].'</td>
                                                <td>'.$row['position_desc'].'</td>
                                                <td>'.$row['department_desc'].'</td>
                                                <td>'.$row['location_desc'].'</td>
                                                <td>'.$row['month_resign'].'</td>
                                                <td>'.$row['talent_flag'].'</td>
                                            </tr>';
                                            $i++;
                                    }
                                    echo '
                                        </tbody>
                                    </table>';

                                    // Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
                                    mysql_free_result($query);

                                    // Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
                                    mysql_close($connect);          
                                    ?>          

                                </div>
                            </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 TAP. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
 <!-- Jquery JS-->
    <script src="./vendor/jquery-3.2.1.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Jquery JS-->
    <script src="./vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="./vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="./vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="./vendor/slick/slick.min.js">
    </script>
    <script src="./vendor/wow/wow.min.js"></script>
    <script src="./vendor/animsition/animsition.min.js"></script>
    <script src="./vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="./vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="./vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="./vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="./js/main.js"></script>


    <!--Export-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>-->
<script type="text/javascript" src="./js/tableExport.js"></script>
<script type="text/javascript" src="./js/jquery.base64.js"></script>
<script type="text/javascript" src="./js/html2canvas.js"></script>
<script type="text/javascript" src="./js/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="./js/jspdf/jspdf.js"></script>
<script type="text/javascript" src="./js/jspdf/libs/base64.js"></script>
<script type="text/javascript" src="./js/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>
<!-- end document-->
