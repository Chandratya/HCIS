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
    <title>Display Helpdesk Data</title>

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
                      
                        
                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-lg-13">
                                    <h4>Data Summary</h4>
                                    <div class="col-lg-8"> <h5 style="float:left; color: blue;">Incident Total:  
                                    <?php 
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

                                     $sql1 = 'SELECT COUNT(*) FROM incident';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5>


                                    <h5 style="float: left; margin-left: 70px; color: green;">Request Total:  
                                    <?php 
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

                                     $sql1 = 'SELECT COUNT(*) FROM request';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5>
                                     
                                    <h5 style="float:left; margin-left: 65px; color: red;">Human Error Total:  
                                    <?php 
                                    $hostname = "localhost";
                                    $database = "hcis";
                                    $username = "root";
                                    $password = "";

                                    $connect = mysqli_connect($hostname, $username, $password)
                                        or die('Could not connect: ' . mysql_error());
                                        //Select The database
                                        $bool = mysqli_select_db($connect,$database);
                                        if ($bool === False){
                                           print "can't find $database";
                                        }

                                     $sql1 = 'SELECT COUNT(*) FROM human_error';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5>

                                    <h5 style="overflow: auto; float: left; color: darkblue;">Incident In Progress:  
                                    <?php 
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

                                     $sql1 = 'SELECT COUNT(*) FROM incident WHERE status_id = 1';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5> 

                                    <h5 style="overflow: auto; margin-left: 30px; float: left; color: darkgreen;">Request In Progress:  
                                    <?php 
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

                                     $sql1 = 'SELECT COUNT(*) FROM request WHERE status_id = 1';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5> 
                                    <h5 style="overflow: auto; margin-left: 28px; float: left; color: darkred;">Human Error In Progress:  
                                    <?php 
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

                                     $sql1 = 'SELECT COUNT(*) FROM human_error WHERE status_id = 1';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5> 


                                    <h5 style="overflow: auto; float: left; color: darkblue;">Incident Solved:  
                                    <?php 
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

                                     $sql1 = 'SELECT COUNT(*) FROM incident WHERE status_id = 2';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5> 

                                    <h5 style="overflow: auto; margin-left: 57px; float: left; color: darkgreen;">Request Solved:  
                                    <?php 
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


                                     $sql1 = 'SELECT COUNT(*) FROM request WHERE status_id = 2';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5> 

                                    <h5 style="overflow: auto; margin-left: 55px; float: left; color: darkred;">Human Error Solved:  
                                    <?php 
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

                                     $sql1 = 'SELECT COUNT(*) FROM human_error WHERE status_id = 2';
                                     $rs = mysqli_query($connect,$sql1);
                                     //-----------^  need to run query here

                                     $result = mysqli_fetch_array($rs);
                                     //here you can echo the result of query
                                     echo $result[0];


                                    ?></h5>


                                     </div>
                                     </div>
                                 
                                
                                <!-- DATA TABLE -->
                                <div>
                                <h4 class="title-5 m-b-35" style="padding-top: 120px;">Incident Data
                                    <a href="helpdesk.php" style="float: right;"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button></a></h4>
                                </div>
                                <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <?php
                                    # FileName="connect.php"
                                    $hostname = "localhost";
                                    $database = "hcis";
                                    $username = "root";
                                    $password = "";

                                    $connect = mysqli_connect($hostname, $username, $password)
                                        or die('Could not connect: ' . mysql_error());
                                        //Select The database
                                        $bool = mysqli_select_db($connect,$database);
                                        if ($bool === False){
                                           print "can't find $database";
                                        }

                                    $sql1 = 'SELECT incident.incident_id,incident.category_id, incident.email,incident.title,incident.message,incident.file, incident.status_id, incident.timestamp, category.category_desc, status.status FROM incident INNER JOIN category ON incident.category_id = category.category_id INNER JOIN status ON incident.status_id = status.status_id ORDER BY timestamp DESC;';
                                            
                                    $query = mysqli_query($connect,$sql1);

                                    if (!$query) {
                                        die ('SQL Error: ' . mysqli_error($connect));
                                    }



                                    echo '<table id="incident" style="display: inline-block; overflow-y: scroll; max-height: 350px;" class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th style="width:100px">Category</th>
                                                <th>Email</th>
                                                <th>Title</th>
                                                <th style="width:550px">Message</th>
                                                <th>File</th>
                                                <th>Status</th>
                                                <th>Timestamp</th>
                                                <th></th>
                                                <th></th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>';
                                          $i = 1;
                                          
                                    while ($row = mysqli_fetch_array($query)) //yg ini
                                    {
                                        echo '<tr>
                                                <td>'.$i.'</td>
                                                <td style="max-width: 100px; display:block; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['category_desc'].'</td>
                                                <td>'.$row['email'].'</td>
                                                <td style="max-width: 100px; display: block; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['title'].'</td>
                                                <td style="max-width: 170px; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['message'].'</td>
                                                <td style="max-width: 50px; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['file'].'</td>
                                                
                                                <td name="status_id">'.$row['status'].'</td>
                                                <td>'.$row['timestamp'].'</td>
                                                <td> <div class="">
                                                            <div class="">
                                                                <a href="detail_incident.php?id='.$row["incident_id"].'" style="float: right;"><button title="Detail Item" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                                <i class="fa fa-search-plus" style="width:5px; height: 5px;"></i></button></a>
                                                               
                                                               
                                                                </div>
                                                            </div>
                                                        </div></td>
                                                <td> <div class="">
                                                            <div class="">
                                                                    <a href="delete_incident.php?id='.$row["incident_id"].'" style="float: left; padding"><button title="Delete Item" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color: red;">
                                                                <i class="fa fa-eraser" style="width:1px; height: 1px;"></i></button></a>
                                                                    
                                                                

                                                            </div>
                                                        </div></td>
                                                        
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
                                <a href="#" onclick="$('#incident').tableExport({type:'excel',escape:'false'});" style="float: right;"><button style="font-size: 9px" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="fa fa-list-alt"></i>Export to Excel</button></a>
                            </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h4 class="title-5 m-b-35">Request Data</h4>

                                <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <?php
                                    # FileName="connect.php"
                                    $hostname = "localhost";
                                    $database = "hcis";
                                    $username = "root";
                                    $password = "";

                                    $connect = mysqli_connect($hostname, $username, $password)
                                        or die('Could not connect: ' . mysql_error());
                                        //Select The database
                                        $bool = mysqli_select_db($connect,$database);
                                        if ($bool === False){
                                           print "can't find $database";
                                        }

                                    $sql2 = 'SELECT request.request_id, request.category_id, request.email,request.title,request.message,request.file, request.timestamp, category.category_desc, status.status FROM request INNER JOIN category ON request.category_id = category.category_id INNER JOIN status ON request.status_id = status.status_id ORDER BY timestamp DESC;';
                                            
                                    $query = mysqli_query($connect,$sql2);

                                    if (!$query) {
                                        die ('SQL Error: ' . mysqli_error($connect));
                                    }



                                    echo '<table id="request" style="display: inline-block; overflow-y: scroll; max-height: 350px;" class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th style="width:100px">Category</th>
                                                <th>Email</th>
                                                <th>Title</th>
                                                <th style="width:550px">Message</th>
                                                <th>File</th>
                                                <th>Status</th>
                                                <th>Timestamp</th>
                                                <th></th>
                                                <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                          $i = 1;    
                                    while ($row = mysqli_fetch_array($query)) //sini
                                    {
                                        echo '<tr>
                                                <td>'.$i.'</td>
                                                <td style="max-width: 100px; display:block; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['category_desc'].'</td>
                                                <td>'.$row['email'].'</td>
                                                <td style="max-width: 100px; display: block; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['title'].'</td>
                                                <td style="max-width: 100px; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['message'].'</td>
                                                <td>'.$row['file'].'</td>
                                                <td>'.$row['status'].'</td>
                                                <td>'.$row['timestamp'].'</td>
                                                <td> <div class="">
                                                            <div class="">
                                                                
                                                                <a href="detail_request.php?id='.$row["request_id"].'" style="float: left;"><button title="Detail Item" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                                <i class="fa fa-search-plus" style="width:1px; height: 1px;"></i></button></a>

                                                                    
                                                                

                                                            </div>
                                                        </div></td>
                                                        <td> <div class="">
                                                            <div class="">
                                                                    <a href="delete_request.php?id='.$row["request_id"].'" style="float: left; padding"><button title="Delete Item" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color: red;">
                                                                <i class="fa fa-eraser" style="width:1px; height: 1px;"></i></button></a>
                                                                    
                                                                

                                                            </div>
                                                        </div></td>
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
                                <a href="#" onclick="$('#request').tableExport({type:'excel',escape:'false'});" style="float: right;"><button style="font-size: 9px" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="fa fa-list-alt"></i>Export to Excel</button></a>
                            </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h4 class="title-5 m-b-35">Human Error Data</h4>

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

                                    $sql2 = 'SELECT human_error.error_id, human_error.category_id, human_error.email, human_error.title, human_error.message, human_error.file, human_error.timestamp, category.category_desc, status.status FROM human_error INNER JOIN category ON human_error.error_id = category.category_id INNER JOIN status ON human_error.status_id = status.status_id;';
                                            
                                    $query = mysqli_query($connect,$sql2);

                                    if (!$query) {
                                        die ('SQL Error: ' . mysqli_error($connect));
                                    }



                                    echo '<table id="request" style="display: inline-block; overflow-y: scroll; max-height: 350px;" class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th style="width:100px">Category</th>
                                                <th>Email</th>
                                                <th>Title</th>
                                                <th style="width:550px">Message</th>
                                                <th>File</th>
                                                <th>Status</th>
                                                <th>Timestamp</th>
                                                <th></th>
                                                <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                          $i = 1;    
                                    while ($row = mysqli_fetch_array($query)) //sini
                                    {
                                        echo '<tr>
                                                <td>'.$i.'</td>
                                                <td style="max-width: 100px; display:block; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['category_desc'].'</td>
                                                <td>'.$row['email'].'</td>
                                                <td style="max-width: 100px; display: block; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['title'].'</td>
                                                <td style="max-width: 100px; overflow: hidden; whitespace: nowrap; text-overflow: ellipsis;">'.$row['message'].'</td>
                                                <td>'.$row['file'].'</td>
                                                <td>'.$row['status'].'</td>
                                                <td>'.$row['timestamp'].'</td>
                                                <td> <div class="">
                                                            <div class="">
                                                                
                                                                <a href="detail_error.php?id='.$row["error_id"].'" style="float: left;"><button title="Detail Item" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                                <i class="fa fa-search-plus" style="width:1px; height: 1px;"></i></button></a>

                                                                    
                                                                

                                                            </div>
                                                        </div></td>
                                                        <td> <div class="">
                                                            <div class="">
                                                                    <a href="delete_error.php?id='.$row["error_id"].'" style="float: left; padding"><button title="Delete Item" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color: red;">
                                                                <i class="fa fa-eraser" style="width:1px; height: 1px;"></i></button></a>
                                                                    
                                                                

                                                            </div>
                                                        </div></td>
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
                                <a href="#" onclick="$('#request').tableExport({type:'excel',escape:'false'});" style="float: right;"><button style="font-size: 9px" class="au-btn au-btn-icon au-btn--green au-btn--small">
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
