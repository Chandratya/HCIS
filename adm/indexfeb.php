<?php
session_start();
include "../session.php";
include "../connect.php";
if($getUser['role']!='admin'){
    $message = "Anda tidak mempunyai akses admin!";
    echo "<script type='text/javascript'>alert('$message'); window.location='../index.php';</script>";
}

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
    <title>HCIS</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

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
            <!-- HEADER DESKTOP-->

                       <!-- MAIN CONTENT-->
            <div class="main-content" style="background-color: white;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Employee Demographic</h2>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner" style="height: 200px;">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                
                                                <span>Trend Employee /Juni<br></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>90</h2>
                                                <span>Magang</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>-->

                             <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner" style="height: 200px;">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i><br>
                                            </div>
                                            <div class="text">
                                               
                                                <span>Employee Status</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                         <div align="center" style="width: 400px; float: left; margin-left: 65px; ">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Employee by Location</h3>
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            </center>
                            <center>
                            <div class="" style="width: 400px; float: left; margin-left: 25px;">
                                <div class="au-card m-b-30" id="genderJanuari">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40" style="float: left;">Gender (Februari) </h3>
                                        <ul class="nav nav-tabs" style="float: right;">
                                           
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Filter
                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                  <a id="jan" class="dropdown-item" href="index.php">January</a>
                                                    <a id="feb" class="dropdown-item" href="indexfeb.php">February</a>
                                                    <a id="mar" class="dropdown-item" href="indexmar.php">March</a>
                                                    <a id="apr" class="dropdown-item" href="indexapr.php">April</a>
                                                    <a id="apr" class="dropdown-item" href="indexmay.php">Mei</a>
                                                    <a id="apr" class="dropdown-item" href="indexjun.php">Juni</a>
                                                </div>
                                            </li>
                                            
                                        </ul>

                                        <canvas id="genderjan"></canvas>
                                       
                                    </div>
                                </div>
                            </center>
                                

                            </div>

                         <div class="col-lg-12" style="float: left;" >
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Employee by Job Group</h3>
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Employee by Business Unit</h3>
                                        <canvas id="turnover"></canvas>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-lg-12" align="center" style="width: 500px; float: left;">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Trend Employee Turn Over</h3>
                                        <canvas id="totalturn"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12" align="center" style="width: 440px; float: left;">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                       
                                        Data Table:
                                            <table border="1" width="200" align="center" style="text-align: center;">
                                                <tr>
                                                    <th style="width: 60px">Bulan</th>
                                                    <th>HO</th>
                                                    <th style="width: 40px">Site</th>
                                                    <th>Jumlah</th>

                                                </tr>
                                                <tr>
                                                    <td>Januari</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Februari</td>
                                                    <td>2</td>
                                                    <td>7</td>
                                                    <td>9</td>
                                                </tr>
                                                  <tr>
                                                    <td>Maret</td>
                                                    <td>1</td>
                                                    <td>13</td>
                                                    <td>14</td>
                                                </tr>
                                                <tr>
                                                    <td>April</td>
                                                    <td>3</td>
                                                    <td>17</td>
                                                    <td>20</td>
                                                </tr>
                                                  <tr>
                                                    <td>Mei</td>
                                                    <td>3</td>
                                                    <td>14</td>
                                                    <td>17</td>
                                                </tr>
                                                <tr>
                                                    <td>Juni</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>15</td>
                                                
                                            </table>

                                    </div>
                                </div>
                            </div>

                            
                            <div style="z-index: auto; margin-bottom: 50px;">
                        
                            
                            
                            <div class="" style="width: 450px; float: left; margin-left: 25px;">
                                
                            
                                

                            </div>
                        
                         <div class="" style="float: left; margin-left: 45px;">
                            <div class="au-card m-b-30" id="genderJanuari" style="height: 305px; width: 470px;">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40" style="float: left; margin-left: 100px; font-size: 19px;">Talent (Y/N) Februari</h3>
                                        <ul class="nav nav-tabs" style="float: right;">
                                           
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Filter
                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                   <a id="jan" class="dropdown-item" href="index.php">January</a>
                                                    <a id="feb" class="dropdown-item" href="indexfeb.php">February</a>
                                                    <a id="mar" class="dropdown-item" href="indexmar.php">March</a>
                                                    <a id="apr" class="dropdown-item" href="indexapr.php">April</a>
                                                    <a id="apr" class="dropdown-item" href="indexmay.php">Mei</a>
                                                    <a id="apr" class="dropdown-item" href="indexjun.php">Juni</a>
                                                </div>
                                            </li>
                                            
                                        </ul>

                                        <canvas id="talentchart"></canvas>
                                       
                                    </div>
                                </div>
                                 
                           
                             
                            
                            </div>
                               <div class="au-card m-b-30" id="genderJanuari" style="height: 305px; width: 400px; float: left; margin-left: 30px;">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40" style="font-size: 20px">Summary Employee Turn Over</h3>
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                    
                                </div>

                            
                            <div class="col-lg-12" style="float: left;"><h4>Helpdesk :</h4>
                            <div class="col-lg-6" style="float: left;">

                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 style="font-size: 16px" class="title-2 m-b-40">By Type (%)</h3>
                                        <canvas id="hd_type"></canvas>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-lg-6" style="float: left;">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 style="font-size: 16px" class="title-2 m-b-40">By Status (%)</h3>
                                        <canvas id="hd_status"></canvas>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            </div>


                        
                        </div>
                            
                        
                         <div class="row" style="float: left; margin-top: 200px;" >
                            <div class="col-md-12">
                                <center>
                                <div class="copyright">
                                    <p>Copyright © 2018 TAP. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
