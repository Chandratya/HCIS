<?php

include '../connect.php';
    $link = mysqli_connect("localhost", "root", "", "hcis") or die($link);
    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd1 = "UPDATE human_error SET status_id='2' WHERE error_id='".$_GET['id']."'"; //okok
    $query = mysqli_query($connect,$cmd1);
   // var_dump($query);

   if($query!=false){
        $message = "Status Telah di Update!";
        echo "<script type='text/javascript'>alert('$message'); window.location='helpdesk_display.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysqli_error($connect);
    }
mysqli_close($connect);

?>