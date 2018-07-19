<?php

include '../connect.php';

if(isset($_POST['submit'])){
    $link = mysql_connect("localhost", "root", "", "hcis") or die($link);

    $incidentid = mysql_real_escape_string($_POST['type_id'], $link);
    $typeid = mysql_real_escape_string($_POST['type_id'], $link);
    $cateid = mysql_real_escape_string($_POST['category_id'], $link);
    $title = mysql_real_escape_string($_POST['title'], $link);
    $email = mysql_real_escape_string($_POST['email'], $link);
    $message = mysql_real_escape_string($_POST['message'], $link);
    $file = mysql_real_escape_string($_POST['file'], $link);

    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd1 = "INSERT INTO incident VALUES(incident_id, '$email', '$typeid', '$cateid', '$title', '$message', '$file', 0, NOW() )";
    $cmd2 = "INSERT INTO request VALUES(request_id, '$email', '$typeid', '$cateid', '$title', '$message', '$file', 0, NOW() )";
    $cmd3 = "INSERT INTO human_error VALUES(error_id>0, '$email', '$typeid', '$cateid', '$title', '$message', '$file', 0, NOW() )";

    if ($typeid==1) {
         $query = mysql_query($cmd1, $connect);
    }else if($typeid==2){
         $query = mysql_query($cmd2, $connect);
    }else if(($typeid==3)) {
        # code...
        $query = mysql_query($cmd3, $connect);
    }

   
    if($query!=false){
        $message = "Data Helpdesk berhasil ditambahkan!";
        echo "<script type='text/javascript'>alert('$message'); window.location='helpdesk_display.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysql_error($connect);
    }
}
mysql_close($connect);

?>