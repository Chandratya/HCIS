<?php

include './connect.php';
    $link = mysql_connect("localhost", "root", "", "hcis") or die($link);
    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd1 = "DELETE FROM request WHERE request_id='".$_GET['id']."'"; //okok
    $query = mysql_query($cmd1, $connect);
   // var_dump($query);

   if($query!=false){
        $message = "Item telah di Hapus!";
        echo "<script type='text/javascript'>alert('$message'); window.location='helpdesk_display.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysql_error($connect);
    }
mysql_close($connect);

?>