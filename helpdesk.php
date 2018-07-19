<?php 
session_start();
include 'session.php';
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
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">



    <script type="text/javascript">
    function validateForm() {
    var email = document.forms["myForm"]["email"];
    var type = document.forms["myForm"]["type_id"];
    var category = document.forms["myForm"]["category_id"];
    var title = document.forms["myForm"]["title"];
    var message = document.forms["myForm"]["message"];
    
   
    if (email.value == "") {
        alert("Email harus di isi!");
        return false;
                 }

    if (type.value == "") {
        alert("Data Type harus di isi!");
        return false;
                }
    if (category.value == "") {
        alert("Category harus di isi!");
        return false;
                 }

    if (title.value == "") {
        alert("Title harus di isi!");
        return false;
                 }
    if (message.value == "") {
        alert("Message harus di isi!");
        return false;
                 }

    } 

    </script>



</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="3">
                            <h4>HCIS DASHBOARD</h4>
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
                    <h3 style="color: ">HCIS DASHBOARD</h3>
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
                <a href="helpdesk_display.php" style="padding-left: 90px;">
                <button style="margin-left: 10px; margin-bottom: 15px;" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="fa fa-info" style="padding-right: 7px;"></i>Display Result</button></a>                            
                <div class="section__content section__content--p30">
                    
                    <div class="container-fluid">
                      
                        
                        <center>
                        <div class="row">
                            <div class="col-lg-11" style="margin-left: 50px;">
                                <div class="card">
                                    <div class="card-header"> <strong>HCIS HELPDESK </strong></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            
                                        </div>
                                        
                                        <form name="myForm" action="input_helpdesk.php" onsubmit="return validateForm()" method="post" novalidate="novalidate">
                                            <div class="form-group col-lg-12" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Email :</label>
                                                <input class="form-control cc-name" type="text" name="email" value="<?php if($getUser!=null){echo $getUser['email'];}  ?>" readonly>
                                            </div>
                                            <div class="form-group col-lg-6" style="float: left;">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Type</label>
                                                <?php
                                                 $con = mysql_connect("localhost","root","");
                                                 $db = mysql_select_db("hcis",$con);
                                                 $get=mysql_query("SELECT type_id,type_desc FROM data_type ORDER BY type_id ASC");
                                                 $option = '';
                                                 while($row = mysql_fetch_assoc($get))
                                                {
                                                  $option .= '<option value = "'.$row['type_id'].'">'.$row['type_desc'].'</option>';
                                                }
                                                ?>
                                                <select name="type_id" class="form-control cc-name valid">
                                                    <option>--- Select Type ---</option>
                                                    <?php echo $option; ?>
                                                </select>
                                            </div>
                                            <div class="form-group has-success col-lg-6" style="float: left;">
                                                <label for="cc-name" style="float: left;" class="control-label mb-1">Category (Class)</label>
                                                <?php
                                                 $con = mysql_connect("localhost","root","");
                                                 $db = mysql_select_db("hcis",$con);
                                                 $get=mysql_query("SELECT category_id,category_desc FROM category ORDER BY category_id ASC");
                                                 $option = '';
                                                 while($row = mysql_fetch_assoc($get))
                                                {
                                                  $option .= '<option value = "'.$row['category_id'].'">'.$row['category_desc'].'</option>';
                                                }
                                                ?>
                                                <select name="category_id" class="form-control cc-name valid">
                                                    <option>--- Select Category ---</option>
                                                    <?php echo $option; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-12" style="float: left;">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Title</label>
                                                <input id="cc-number" name="title" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group col-lg-12" style="float: left;">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Message</label>
                                                <textarea name="message" class="form-control cc-name valid" style="height: 200px" placeholder="Enter your message here"></textarea>
                                            </div>
                                            <div class="form-group col-lg-12" style="float: left;">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Attachment</label>
                                                <input id="cc-number" name="file" type="file" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                
                                            </div>
                                            
                                            <div style="float: left;">
                                                <button id="payment-button" type="submit" name="submit" style="margin-top: 40px; " class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Submit</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
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
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
