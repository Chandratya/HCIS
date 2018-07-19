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


    <script type="text/javascript">
    function validateForm() {
    var name = document.forms["myForm"]["nama_karyawan"];
    var job = document.forms["myForm"]["jabatan_terakhir"];
    var departemen = document.forms["myForm"]["departemen"];
    var nik = document.forms["myForm"]["no_karyawan"];
    var date_in = document.forms["myForm"]["date_in"];
    var date_out = document.forms["myForm"]["date_out"];
    var q1 = document.forms["myForm"]["q1"];
    var q2 = document.forms["myForm"]["q2"];
    var q3 = document.forms["myForm"]["q3"];
    var aspek1 = document.forms["myForm"]["aspek1"];
    var aspek2 = document.forms["myForm"]["aspek2"];
    var aspek3 = document.forms["myForm"]["aspek3"];
    var aspek4 = document.forms["myForm"]["aspek4"];
    var aspek5 = document.forms["myForm"]["aspek5"];
    var cmt = document.forms["myForm"]["comment"];

    if (name.value == "") {
        alert("Nama Karyawan harus di isi!");
        return false;
                 }

    if (job.value == "") {
        alert("Jabatan Terakhir harus di isi!");
        return false;
                }
    if (date_in.value == "") {
        alert("Tanggal Mulai Kerja harus di isi!");
        return false;
                 }

    if (date_out.value == "") {
        alert("Tanggal Keluar Kerja harus di isi!");
        return false;
                 }
    if (nik.value == "") {
        alert("Nomor Karyawan harus di isi!");
        return false;
                 }

    if (q1.value == "") {
        alert("Pertanyaan 1 harus di isi!");
        return false;
                 }
    if (q2.value == "") {
        alert("Pertanyaan 2 harus di isi!");
        return false;
                 }

    if (q3.value == "") {
        alert("Pertanyaan 3 harus di isi!");
        return false;
                 }
    if (aspek1.value == "") {
        alert("Pertanyaan Aspek 1 harus di isi!");
        return false;
                 }

    if (aspek2.value == "") {
        alert("Pertanyaan Aspek 2 harus di isi!");
        return false;
                 }
    if (aspek3.value == "") {
        alert("Pertanyaan Aspek 3 harus di isi!");
        return false;
                 }

    if (aspek4.value == "") {
        alert("Pertanyaan Aspek 4 harus di isi!");
        return false;
                 }
    if (aspek5.value == "") {
        alert("Pertanyaan Aspek 5 harus di isi!");
        return false;
                 }
    if (cmt.value == "") {
        alert("Komentar harus di isi!");
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
                          
                            <li class="active">
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
                      
                        
                        <center>
                        <div class="row">
                            <div class="col-lg-11" style="margin-left: 50px;">
                                <div class="card">
                                    <div class="card-header"> <strong>EXIT INTERVIEW FORM </strong></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            
                                        </div>
                                        
                                        <form name="myForm" action="exitform_post.php" onsubmit="return validateForm()" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1 text-left">Nama Karyawan<label style="color: red">*</label></label>
                                                <input id="cc-pament" name="nama_karyawan" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" style="float: left;" class="control-label mb-1">Jabatan Terakhir<label style="color: red">*</label></label>
                                                <input id="cc-name" name="jabatan_terakhir" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Departemen/Divisi/Perusahaan<label style="color: red">*</label></label>
                                                <input id="cc-number" name="departemen" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">No. Karyawan<label style="color: red">*</label></label>
                                                <input id="cc-number" name="no_karyawan" type="number" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Tanggal Masuk Kerja<label style="color: red">*</label></label>
                                                <input id="cc-number" name="date_in" type="date" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Tanggal Terakhir Bekerja<label style="color: red">*</label></label>
                                                <input id="cc-number" name="date_out" type="date" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <hr style="margin-top: 25px;">
                                            <h3 class="text-center title-2">Item Pertanyaan</h3>
                                            
                                            <br><br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label style="float: left;" for="cc-exp" class="control-label mb-1 text-left">Hal apakah yang membuat anda dahulu berminat untuk bergabung dengan Triputra Agro Persada Group<label style="color: red">*</label></label>
                                                        <textarea id="cc-exp" name="q1" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp"></textarea>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label style="float: left;" for="x_card_code" class="control-label mb-1 text-left">Hal apakah yang paling anda sukai selama bekerja di Triputra Agro Persada Group?<label style="color: red">*</label></label>
                                                    <div class="input-group">
                                                       <textarea id="cc-exp" name="q2" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp"></textarea>

                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label style="float: left;" for="cc-exp" class="control-label mb-1 text-left">Apakah alasan utama anda keluar dari Triputra Agro Persada Group?<label style="color: red">*</label></label>
                                                        <textarea id="cc-exp" name="q3" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp"></textarea>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            <hr>
                                            <h5 class="text-center title-2 text-left" style="font-size: 16px;">Jelaskan pendapat anda mengenai aspek berikut yang berlaku di Triputra Agro Persada Group</h5>
                                            <br><br>
                                          
                                                <table style="float: left; margin-top: 40px;">
                                                    <thead>
                                                    <th>Aspek</th>
                                                    <th style="padding-left: 55px">Pendapat Anda</th>
                                                    </thead><tr>
                                                        <td>Hubungan & suasana kerja dengan atasan<label style="color: red">*</label></td>
                                                        <td style="padding-left: 55px"><input class="form-control" type="text" name="aspek1" placeholder=""></td>
                                                        
                                                      </tr>
                                                      <tr>
                                                        <td>Hubungan & suasana kerja dengan rekan kerja<label style="color: red">*</label></td>
                                                         <td style="padding-left: 55px; padding-top: 10px;"><input type="text" name="aspek2" class="form-control"></td>
                                                        
                                                      </tr>    
                                                      <tr>
                                                        <td>Hubungan & suasana kerja dengan bawahan<label style="color: red">*</label></td>
                                                        <td style="padding-left: 55px; padding-top: 10px;"><input type="text" name="aspek3" class="form-control"></td>
                                                        
                                                      </tr> 
                                                      <tr>
                                                        <td>Peraturan Kebijakan perusahaan<label style="color: red">*</label></td>
                                                        <td style="padding-left: 55px; padding-top: 10px;"><input type="text" name="aspek4" class="form-control"></td>
                                                        
                                                      </tr>
                                                      <tr>
                                                        <td>Gaji<label style="color: red">*</label></td>
                                                        <td style="padding-left: 55px; padding-top: 10px;"><input type="text" name="aspek5" class="form-control"></td>
                                                        
                                                      </tr>
                                                      <tr>
                                                        <td>Fasilitas & Benefit<label style="color: red">*</label></td>
                                                        <td style="padding-left: 55px; padding-top: 10px;"><input type="text" name="aspek6" class="form-control"></td>
                                                        
                                                      </tr>
                                                      <tr>
                                                        <td>Pelatihan dan pengembangan karyawan<label style="color: red">*</label></td>
                                                        <td style="padding-left: 55px; padding-top: 10px;"><input type="text" name="aspek7" class="form-control"></td>
                                                        
                                                      </tr>
                                                      
                                                </table><br>
                                            <div style="margin-top: 20px; float: left;">
                                            <p style="font-size: 14; float: left;">Komentar dan saran Anda untuk Triputra Agro Persada Group<label style="color: red">*</label></p><br>
                                            <textarea class="form-control" name="comment" style="float: left; width: 800px; height: 150px;" placeholder="Masukkan komentar dan saran Anda.."></textarea><br>
                                            <p style="float: left; margin-top: 30px;"><label style="color: red">*</label> Wajib di isi.</p>
                                            </div>

                                            <div style="">
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
