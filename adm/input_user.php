<?php

include '../connect.php';

if(isset($_POST['submit'])){
    $link = mysql_connect("localhost", "root", "", "hcis") or die($link);

    $userid = mysql_real_escape_string($_POST['id_user'], $link);
    $uname = mysql_real_escape_string($_POST['username'], $link);
    $pass = mysql_real_escape_string($_POST['password'], $link);
    $email = mysql_real_escape_string($_POST['email'], $link);
    $role = mysql_real_escape_string($_POST['role'], $link);
    
    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd = "INSERT INTO user VALUES('$userid', '$uname', '$pass', '$email', '$role')";
    $query = mysql_query($cmd,$connect);
    if($query!=false){
        $message = "Data User Ditambahkan!";
        echo "<script type='text/javascript'>alert('$message'); window.location='helpdesk_admin.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysql_error($connect);
    }
}
mysql_close($connect);

?>