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
    <title>Setup Helpdesk item</title>

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
                                <i class="fas fa-table"></i>Exit Questionnaire</a>
                          
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
                                <i class="fas fa-table"></i>Exit Questionnaire</a>
                          
                            <li class="">
                            <a class="js-arrow" href="dis_int.php">
                                <i class="fas fa-table"></i>Exit Interview Form</a>
                        </li>


                        </li>
                        </li>
                        
                           
                        <hr>
                        <h5>Services</h5>
                        
                        
                        </li>
                        <li class="active">
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
                      
                        
                        <center>
                        <div class="row">
                            <div class="col-lg-11" style="margin-left: 50px;">
                                 <div class="card">
                                    <div class="card-header"> <strong>ADD USER</strong></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            
                                        </div>
                                        
                                        <form action="input_user.php" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">ID User:</label>
                                                <input type="text" class="form-control cc-name" name="id_user" placeholder="example: 3">
                                            </div>
                                            
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Email:</label>
                                                <input type="text" class="form-control cc-name" name="email" placeholder="example: hcis@tap.com">
                                            </div>
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Username:</label>
                                                <input type="text" class="form-control cc-name" name="username" placeholder="example: hcisuser">
                                            </div>
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Password:</label>
                                                <input type="password" class="form-control cc-name" name="password" placeholder="example: Incident">
                                            </div>
                                            <div class="form-group col-lg-12" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Role:</label>
                                                <select type="text" class="form-control cc-name" name="role" placeholder="example: Incident">
                                                    <option value="">-- Select user Role --</option>
                                                    <option value="admin">Administrator </option>
                                                    <option value="user">User </option>
                                                </select>
                                            </div>
                                            
                                            <button id="payment-button" type="submit" name="submit" style="margin-top: 40px; " class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Submit</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                            
                                        </form>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header"> <strong>ADD HELPDESK TYPE</strong></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            
                                        </div>
                                        
                                        <form action="input_type.php" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Type ID :</label>
                                                <input type="text" class="form-control cc-name" name="type_id" placeholder="example: 001">
                                            </div>
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Type Name:</label>
                                                <input type="text" class="form-control cc-name" name="type_desc" placeholder="example: Incident">
                                            </div>
                                            <button id="payment-button" type="submit" name="submit" style="margin-top: 40px; " class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Submit</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                            
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header"> <strong>ADD HELPDESK CATEGORY</strong></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            
                                        </div>
                                        
                                        <form action="input_category.php" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Category ID :</label>
                                                <input type="text" class="form-control cc-name" name="category_id" placeholder="example: 006">
                                            </div>
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Category Description:</label>
                                                <input type="text" class="form-control cc-name" name="category_desc" placeholder="example: User Login">
                                            </div>
                                            <button id="payment-button" type="submit" name="submit" style="margin-top: 40px; " class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Submit</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>

                        <div class="row m-t-30" style="float: left;">
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
