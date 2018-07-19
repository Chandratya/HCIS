<?php
session_start();?>
<?php
include 'connect.php'; //summon $conn
$login = true;
$link = mysqli_connect("localhost", "root", "", "hcis") or die($link);
if(isset($_SESSION['user'])){
   header('location: ./index.php');
}
if (isset($_POST['token']))
{
    // var_dump($_POST);
    $_POST['username'] = mysqli_real_escape_string($link, $_POST['username']);
    $_POST['password'] = mysqli_real_escape_string($link, $_POST['password']);
    $token = $_POST['token'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $cmd = "SELECT * FROM user WHERE username= '$user' AND password= '$pass' ";
    $query = mysqli_query($connect, $cmd);
    $getUser = mysqli_fetch_array($query);
    if($getUser==null){
        $login = false;
    }else{
        $login = true;
        $_SESSION['id'] = $getUser['id_user'];
        $_SESSION['user'] = $getUser['username'];

        if ($getUser['role']=='admin') {
           header('location: ./adm/index.php');
        }else{
            header('location: ./index.php');
        }
        
    }

    // var_dump($_POST);
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
    <title>Login</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h3>HUMAN CAPITAL INFORMATION SYSTEM</h3>

                            </a>
                            <p>Login Page</p>
                        </div>
                        <div class="login-form">
                            <form id="sign_in" method="post">
                                <div class="form-group">
                                    <input type="hidden" value="<?php echo md5(uniqid()); ?>" name="token"/>
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" action="./index.<?php  ?>">sign in</button>
                                <?php if($login==false){ ?>
                                <div class="alert alert-danger">
                                <b>Coba Lagi!</b> <span>Username atau Password Salah!.</span>
                                 </div>
                                 <?php } ?>
                            </form>
                            
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