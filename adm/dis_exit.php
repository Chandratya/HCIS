<?php
session_start();
include "../session.php";
include "../connect.php";


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
    <title>Display Exit Questionnaire</title>

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
                            <li class="active">
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
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Employee Exit Questionnaire
                                    <div class="table-data__tool-right" style="float: right;">
                                        <a href="dis_exit_input.php"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button></a>
                                        
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

                                    $connect = mysqli_connect($hostname, $username, $password)
                                        or die('Could not connect: ' . mysqli_error());
                                        //Select The database
                                        $bool = mysqli_select_db($connect,$database);
                                        if ($bool === False){
                                           print "can't find $database";
                                        }

                                    $sql = 'SELECT id_exit, penempatan, jk, date_in, date_out, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, reason, comment FROM exit_form';
                                            
                                    $query = mysqli_query($connect,$sql);

                                    if (!$query) {
                                        die ('SQL Error: ' . mysqli_error($connect));
                                    }



                                    echo '<table id="exitquest" style="display: inline-block; overflow-y: scroll; max-height: 350px;" class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                <th> act </th>
                                                <th> No. </th>
                                                <th>Penempatan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>date_in</th>
                                                <th>date_out</th>
                                                <th>Question 1</th>
                                                <th>Question 2</th>
                                                <th>Question 3</th>
                                                <th>Question 4</th>
                                                <th>Question 5</th>
                                                <th>Question 6</th>
                                                <th>Question 7</th>
                                                <th>Question 8</th>
                                                <th>Question 9</th>
                                                <th>Question 10</th>
                                                <th>Question 11</th>
                                                <th>Question 12</th>
                                                <th>Question 13</th>
                                                <th>Question 14</th>
                                                <th>Question 15</th>
                                                <th>Question 16</th>
                                                <th>Question 17</th>
                                                <th>Question 18</th>
                                                <th>Question 19</th>
                                                <th>Question 20</th>
                                                <th>Question 21</th>
                                                <th>Question 22</th>
                                                <th>Question 23</th>
                                                <th>Question 24</th>
                                                <th>Question 25</th>
                                                <th>Reason</th>
                                                <th>Comments </th>

                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                          $i = 1;    
                                    while ($row = mysqli_fetch_array($query))
                                    {
                                        echo '<tr>
                                                <td><a href="del_quest.php?id='.$row["id_exit"].'">Del</td>
                                                <td>'.$i.'</td>
                                                <td>'.$row['penempatan'].'</td>
                                                <td>'.$row['jk'].'</td>
                                                <td>'.$row['date_in'].'</td>
                                                <td>'.$row['date_out'].'</td>
                                                <td>'.$row['q1'].'</td>
                                                <td>'.$row['q2'].'</td>
                                                <td>'.$row['q3'].'</td>
                                                <td>'.$row['q4'].'</td>
                                                <td>'.$row['q5'].'</td>
                                                <td>'.$row['q6'].'</td>
                                                <td>'.$row['q7'].'</td>
                                                <td>'.$row['q8'].'</td>
                                                <td>'.$row['q9'].'</td>
                                                <td>'.$row['q10'].'</td>
                                                <td>'.$row['q11'].'</td>
                                                <td>'.$row['q12'].'</td>
                                                <td>'.$row['q13'].'</td>
                                                <td>'.$row['q14'].'</td>
                                                <td>'.$row['q15'].'</td>
                                                <td>'.$row['q16'].'</td>
                                                <td>'.$row['q17'].'</td>
                                                <td>'.$row['q18'].'</td>
                                                <td>'.$row['q19'].'</td>
                                                <td>'.$row['q20'].'</td>
                                                <td>'.$row['q21'].'</td>
                                                <td>'.$row['q22'].'</td>
                                                <td>'.$row['q23'].'</td>
                                                <td>'.$row['q24'].'</td>
                                                <td>'.$row['q25'].'</td>
                                                <td>'.$row['reason'].'</td>
                                                <td>'.$row['comment'].'</td>
                                            </tr>';
                                            $i++;
                                    }
                                    echo '
                                        </tbody>
                                    </table>';

                                    // Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
                                    mysqli_free_result($query);

                                    // Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
                                    mysqli_close($connect);          
                                    ?>          

                                </div>
                                <a href="#" onclick="$('#exitquest').tableExport({type:'excel',escape:'false', ignoreColumn:'[1]'});" style="float: right;"><button style="font-size: 9px" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="fa fa-list-alt"></i>Export to Excel</button></a>
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
       <!--Export-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>-->
<script type="text/javascript" src="../js/tableExport.js"></script>
<script type="text/javascript" src="../js/jquery.base64.js"></script>
<script type="text/javascript" src="../js/html2canvas.js"></script>
<script type="text/javascript" src="../js/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="../js/jspdf/jspdf.js"></script>
<script type="text/javascript" src="../js/jspdf/libs/base64.js"></script>
<script type="text/javascript" src="../js/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</body>

</html>
<!-- end document-->
