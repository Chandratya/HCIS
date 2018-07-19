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
    <title>Input Exit Questionnaire</title>

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
    var loc = document.forms["myForm"]["penempatan"];
    var jk = document.forms["myForm"]["jk"];
    var date_in = document.forms["myForm"]["date_in"];
    var date_out = document.forms["myForm"]["date_out"];
    var q1 = document.forms["myForm"]["q1"];
    var q2 = document.forms["myForm"]["q2"];
    var q3 = document.forms["myForm"]["q3"];
    var q4 = document.forms["myForm"]["q4"];
    var q5 = document.forms["myForm"]["q5"];
    var q6 = document.forms["myForm"]["q6"];
    var q7 = document.forms["myForm"]["q7"];
    var q8 = document.forms["myForm"]["q8"];
    var q9 = document.forms["myForm"]["q9"];
    var q10 = document.forms["myForm"]["q10"];
    var q11 = document.forms["myForm"]["q11"];
    var q12 = document.forms["myForm"]["q12"];
    var q13 = document.forms["myForm"]["q13"];
    var q14 = document.forms["myForm"]["q14"];
    var q15 = document.forms["myForm"]["q15"];
    var q16 = document.forms["myForm"]["q16"];
    var q17 = document.forms["myForm"]["q17"];
    var q18 = document.forms["myForm"]["q18"];
    var q19 = document.forms["myForm"]["q19"];
    var q20 = document.forms["myForm"]["q20"];
    var q21 = document.forms["myForm"]["q21"];
    var q22 = document.forms["myForm"]["q22"];
    var q23 = document.forms["myForm"]["q23"];
    var q24 = document.forms["myForm"]["q24"];
    var q25 = document.forms["myForm"]["q25"]; 
    var cmt = document.forms["myForm"]["comment"];

    if (loc.value == "") {
        alert("Penempatan harus di isi!");
        return false;
                 }

    if (jk.value == "Pilih Jenis Kelamin :") {
        alert("Jenis Kelamin harus di isi!");
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

    if (q4.value == "") {
        alert("Pertanyaan 4 harus di isi!");
        return false;
                 }
    if (q5.value == "") {
        alert("Pertanyaan 5 harus di isi!");
        return false;
                 }

    if (q6.value == "") {
        alert("Pertanyaan 6 harus di isi!");
        return false;
                 }
    if (q7.value == "") {
        alert("Pertanyaan 7 harus di isi!");
        return false;
                 }

    if (q8.value == "") {
        alert("Pertanyaan 8 harus di isi!");
        return false;
                 }
    if (q9.value == "") {
        alert("Pertanyaan 9 harus di isi!");
        return false;
                 }

    if (q10.value == "") {
        alert("Pertanyaan 10 harus di isi!");
        return false;
                 }
    if (q11.value == "") {
        alert("Pertanyaan 11 harus di isi!");
        return false;
                 }

    if (q12.value == "") {
        alert("Pertanyaan 12 harus di isi!");
        return false;
                 }
    if (q13.value == "") {
        alert("Pertanyaan 13 harus di isi!");
        return false;
                 }

    if (q14.value == "") {
        alert("Pertanyaan 14 harus di isi!");
        return false;
                 }
    if (q15.value == "") {
        alert("Pertanyaan 15 harus di isi!");
        return false;
                 }

    if (q16.value == "") {
        alert("Pertanyaan 16 harus di isi!");
        return false;
                 }
    if (q17.value == "") {
        alert("Pertanyaan 17 harus di isi!");
        return false;
                 }

    if (q18.value == "") {
        alert("Pertanyaan 18 harus di isi!");
        return false;
                 }
    if (q19.value == "") {
        alert("Pertanyaan 19 harus di isi!");
        return false;
                 }

    if (q20.value == "") {
        alert("Pertanyaan 20 harus di isi!");
        return false;
                 }
    if (q21.value == "") {
        alert("Pertanyaan 21 harus di isi!");
        return false;
                 }
    if (q22.value == "") {
        alert("Pertanyaan 22 harus di isi!");
        return false;
                 }

    if (q23.value == "") {
        alert("Pertanyaan 23 harus di isi!");
        return false;
                 }
    if (q24.value == "") {
        alert("Pertanyaan 24 harus di isi!");
        return false;
                 }

    if (q25.value == "") {
        alert("Pertanyaan 25 harus di isi!");
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
                            <li class="active">
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
                      
                        
                        <center>
                        <div class="row">
                            <div class="col-lg-11" style="margin-left: 50px;">
                                <div class="card">
                                    <div class="card-header"> <strong>EXIT QUESTIONNAIRE</strong></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            
                                        </div>
                                        
                                        <form name="myForm" onsubmit="return validateForm()" action="exitquest_post.php" method="post" novalidate="novalidate">
                                            <div style="" class="form-group">
                                                <label for="cc-payment" style="float: left;" class="control-label mb-1">Penempatan (HO/Site) <label style="color: red">*</label></label>
                                                <input id="cc-pament" name="penempatan" type="text" class="form-control" aria-required="true" aria-invalid="false" onsubmit="return validateLoc()" value="">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" style="float: left;" class="control-label mb-1">Jenis Kelamin (Pria / Wanita)<label style="color: red">*</label></label>
                                                <select id="cc-name" name="jk" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                    <option value="Pria">Pilih Jenis Kelamin :</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                    </select>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Bln & Thn Mulai Bekerja<label style="color: red">*</label></label>
                                                <input id="cc-number" name="date_in" type="date" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" style="float: left;" class="control-label mb-1">Bln & Thn Berhenti Bekerja<label style="color: red">*</label></label>
                                                <input id="cc-number" name="date_out" type="date" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <hr style="margin-top: 25px;">
                                            <h3 class="text-center title-2">Item Pertanyaan <label style="color: red">*</label></h3>
                                            <p class="text-left">Jawab dengan skala 1-4. 1 = Tidak sesuai, 2 = Kurang sesuai, 3 = Sesuai, 4 = Sangat sesuai</p>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" style="float: left;" class="control-label mb-1 text-left">1.) Bagaimana lingkungan tempat anda bekerja (sirkulasi udara, suhu dan pencahayaan) ?</label>
                                                        <input id="cc-exp" name="q1" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">2.) Bagaimana pembagian beban kerja yang Anda terima dengan rekan kerja lainnya?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q2" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">3.) Apakah atasan anda jelas dalam menyampaikan target kerja yang harus dicapai?</label>
                                                        <input id="cc-exp" name="q3" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">4.) Apakah tugas dan tanggung jawab pekerjaan yang Anda emban sesuai dengan harapan anda?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q4" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">5.) Apakah kompensasi/Gaji yang diberikan oleh perusahaan telah sesuai dengan beban dan tanggung jawab Anda?</label>
                                                        <input id="cc-exp" name="q5" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">6.) Apakah perusahaan memperhatikan fasilitas-fasilitas umum (contoh:kamar mandi dan ruang tidur) di lingkungan kerja anda?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q6" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">7.) Bagaimana penilaian Anda terhadap tugas pekerjaan anda selama ini?</label>
                                                        <input id="cc-exp" name="q7" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">8.) Apakah atasan Anda memberikan nasihat dan masukan untuk perbaikan hasil kerja Anda?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q8" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">9.) Bagaimanakah fasilitas kerja (alat kerja, komputer, dan ATK) yang diberikan perusahaan untuk menyelesaikan pekerjaan Anda?</label>
                                                        <input id="cc-exp" name="q9" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">10.) Apakah Anda diberikan kesempatan untuk promosi atau mutasi untuk mengembangkan karir oleh atasan Anda?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q10" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">11.) Jika anda sedang mengalami kesulitan dan membutuhkan bantuan dalam menyelesaikan pekerjaan Anda, bagaimana sikap rekan sekerja Anda?</label>
                                                        <input id="cc-exp" name="q11" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">12.) Apakah anda mendapatkan pelatihan (training) untuk menjalankan tugas pekerjaan dengan baik?</label>
                                                    <div class="input-group" style="margin-top: 20px">
                                                        <input id="x_card_code" name="q12" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">13.) Apakah upah/gaji yang diberikan perusahaan mampu bersaing (kompetitif) dengan gaji yang diberikan oleh perusahaan lain pada industri yang sama (industri agrobisnis)?</label>
                                                        <input id="cc-exp" name="q13" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">14.) Bagaimana perasaan anda menjadi bagian dari tim di tempat Anda bekerja saat ini?</label>
                                                    <div class="input-group" style="margin-top: 20px">
                                                        <input id="x_card_code" name="q14" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">15.) Bagaimanakah pandangan Anda terhadap target kerja yang diberikan atasan Anda kepada anda?</label>
                                                        <input style="margin-top: 25px" id="cc-exp" name="q15" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">16.) Apakah tunjangan-tunjangan yang diberikan Perusahaan (contoh: tunjangan kesehatan, cuti, dsb) memberikan manfaat bagi diri Anda?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q16" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">17.) Apakah penempatan lokasi kerja Anda telah sesuai dengan yang Anda harapkan?</label>
                                                        <input style="margin-top: 25" id="cc-exp" name="q17" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">18.) Bagaimana sikap atasan Anda ketika Anda menghadapi kesulitan dalam menjalankan tugas?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q18" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1 text-left">19.) Apakah target kerja yang diberikan oleh atasan dapat Anda penuhi?</label>
                                                        <input style="margin-top: 25px" id="cc-exp" name="q19" type="number" min="1" max="4" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">20.) Apakah sistem kerja (contoh: alur kerja dan birokrasi) yang ada saat ini menunjang penyelesaian tugas kerja Anda?</label>
                                                    <div class="input-group">
                                                        <input  style="margin-top: 25px;" id="x_card_code" name="q20" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">21.) Apakah atasan Anda mendengarkan dan memberikan tanggapan (merespon) terhadap ide-ide/keluhan/saran yang Anda sampaikan?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q21" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">22.) Bagaimanakah intensitas overtime (lembur) Anda selama bekerja?</label>
                                                    <div style="margin-top: 20px" class="input-group">
                                                        <input id="x_card_code" name="q22" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">23.) Apakah hak-hak dalam pekerjaan (uang lembur, cuti, istirahat kerja) diberikan oleh perusahaan sesuai dengan peraturan yang berlaku?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q23" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">24.) Bagaimanakah hubungan Anda secara personal dengan para karyawan lain di perusahaan ini?</label>
                                                    <div style="margin-top: 20px" class="input-group">
                                                        <input id="x_card_code" name="q24" type="number" min="1" max="4" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1 text-left">25.) Apakah atasan Anda meluangkan waktu untuk mendengarkan keluh kesah tentang masalah pribadi Anda?</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="q25" type="number" min="1" max="4" inputmode="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h5 class="text-center title-2">Berikan penjelasan pada pertanyaan berikut:</h5>
                                            <br><br>
                                            <p style="font-size: 14; float: left;">1. Apakah alasan utama Anda memutuskan untuk mengundurkan diri dari Perusahaan? (boleh pilih lebih dari satu) </p>
                                            
                                                <table style="float: left;">
                                                    <tr>
                                                        <td width="20"><input style="float: left;" name="reason" type="checkbox" class="form-control cc-cvc" value="Mendapatkan posisi yang lebih baik"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"></td><td style="margin-left: 10px">Mendapatkan posisi yang lebih baik</td>
                                                        
                                                        
                                                        <td width="20" style="padding-left: 15px"><input style="float: left;" name="reason" type="checkbox" class="form-control cc-cvc" value="Tidak cocok dengan atasan"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"></td><td style="margin-left: 10px">Tidak cocok dengan atasan</td>
                                                      </tr>  
                                                      <tr>
                                                        <td width="20"><input style="float: left;" name="reason" type="checkbox" class="form-control cc-cvc" value="Mendapatkan fasilitas yang lebih baik"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"></td><td style="margin-left: 10px">Mendapatkan fasilitas yang lebih baik</td>
                                                        
                                                        
                                                        <td width="20" style="padding-left: 15px"><input style="float: left;" name="reason" type="checkbox" class="form-control cc-cvc" value="Lingkungan kerja kurang nyaman"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"></td><td style="margin-left: 10px">Lingkungan kerja kurang nyaman</td>
                                                      </tr>
                                                      <tr>
                                                        <td width="20"><input style="float: left;" name="reason" type="checkbox" class="form-control cc-cvc" value="Mendapatkan gaji yang lebih baik"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"></td><td style="margin-left: 10px">Mendapatkan gaji yang lebih baik</td>
                                                        
                                                        
                                                        <td width="20" style="padding-left: 15px"><input style="float: left;" name="reason" type="checkbox" class="form-control cc-cvc" value="Fasilitas karyawan tidak memadai"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"></td><td style="margin-left: 10px">Fasilitas karyawan tidak memadai</td>
                                                      </tr>
                                                      <tr>
                                                        <td width="20"><input style="float: left;" name="reason" type="checkbox" class="form-control cc-cvc" value="Karir & Pengembangan kurang jelas"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"></td><td style="margin-left: 10px">Karir & Pengembangan kurang jelas</td>
                                                        
                                                        
                                                        <td width="20" style="padding-left: 15px"><input style="float: left;" name="reason" type="checkbox" class="form-control cc-cvc" value="Beban kerja yang tinggi"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"></td><td style="margin-left: 10px">Beban kerja yang tinggi</td>
                                                      </tr>
                                                </table><br>
                                            <div style="margin-top: 20px; float: left;">
                                            <p style="font-size: 14; float: left;">2. Komentar dan saran Anda untuk perbaikan perusahaan <label style="color: red">*</label></p><br>
                                            <textarea style="float: left; width: 800px; height: 150px;" class="form-control" name="comment" placeholder="Masukkan komentar dan saran Anda.."></textarea><br>
                                            <p style="float: left; margin-top: 30px;"><label style="color: red">*</label> Wajib di isi.</p>
                                            </div>
                                            <div style="">
                                                <button id="payment-button" type="submit" name="submit" style="margin-top: 40px; float: left;" class="btn btn-lg btn-info btn-block">
                                                    
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
