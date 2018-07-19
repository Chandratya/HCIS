<?php
session_start();
include "../session.php";
include "../connect.php";
/*if($getUser['role']!='admin'){
    $message = "Anda tidak mempunyai akses admin!";
    echo "<script type='text/javascript'>alert('$message'); window.location='../index.php';</script>";
}*/

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
    <title>Input Exit Interview</title>

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
                            <h4>HUMAN CAPITAL INFORMATION SYSTEM</h4>
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
                                    <a href="#">Man Power Existing</a>
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
                                    <a href="#">Man Power Existing</a>
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
                                    <div class="card-header"> <strong>Detail Helpdesk Item</strong></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            
                                        </div>
                                        
                                        <form action="" method="post" novalidate="novalidate">
                                            <?php

                                            include '../connect.php';
                                                $link = mysqli_connect("localhost", "root", "", "hcis") or die($link);
                                                //var_dump($_POST);
                                                //id_user, nama, jk, ttl, alamat, email, username, password, status
                                                $cmd1 = "SELECT * FROM incident WHERE incident_id='".$_GET['id']."'"; //okok
                                                $query = mysqli_query($connect,$cmd1);
                                                $row = mysqli_fetch_assoc($query);
                                               // var_dump($query);
                                            ?>
                                            <div class="form-group">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Requester</label>
                                                <input id="cc-pament" name="nama_karyawan" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                                value="<?php echo ''.$row['email'].''; ?>" readonly disabled="">
                                            </div>
                                           <div class="form-group">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Category ID</label>
                                                <input id="cc-pament" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                                value="<?php echo ''.$row['category_id'].''; ?>" readonly disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Title</label>
                                                <input id="cc-pament" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                                value="<?php echo ''.$row['title'].''; ?>" readonly disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Message</label>
                                                <textarea style="height: 200px" id="cc-number" name="no_karyawan" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" readonly=""><?php echo ''.$row['message'].''; ?></textarea>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">File</label>
                                                <input id="cc-pament" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                                value="<?php
                                                if($row['file']==""){
                                                    echo "No Evidence File";
                                                }else {
                                                        echo ''.$row['file'].'';
                                                }

                                                ?>" readonly disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Current Status </label>
                                                <input id="cc-pament" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                                value="<?php
                                                if($row['status_id']==0){
                                                    echo "None";
                                                }elseif($row['status_id']==1){
                                                    echo "In Progress";
                                                }else{
                                                    echo("Solved");
                                                }

                                                 ?>" readonly disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Tanggal Input</label>
                                                <input id="cc-pament" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                                value="<?php echo ''.$row['timestamp'].''; ?>" readonly disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Update Status</label>
                                                <select class="col-lg-11 form-control" onchange="location = this.value;">
                                                                 <?php echo 
                                                                 '<option> ---Update status incident---</option>
                                                                 <option value="upstat_progress.php?id='.$row["incident_id"].'">In Progress</option>
                                                                 <option value="upstat_solved.php?id='.$row["incident_id"].'">Solved</option>
                                                                 <option value="delete_incident.php?id='.$row["incident_id"].'"><b>Delete<b></option>
                                                                </select>'
                                                                ?>
                                            </div>
                                            
                                            
                                        </form>
                                    </div>
                                     
                                </div>
                            </div>
                           
                        </div>

                    </center>
                     <a href="helpdesk_display.php">
                                      <button title="Back to Display" style="margin-left: 50px; margin-bottom: 15px;" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="fa fa-chevron-left"></i>Back</button></a>

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
