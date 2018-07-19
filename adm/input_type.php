<?php

include '../connect.php';

if(isset($_POST['submit'])){
    $link = mysql_connect("localhost", "root", "", "hcis") or die($link);

    $typeid = mysql_real_escape_string($_POST['type_id'], $link);
    $typedesc = mysql_real_escape_string($_POST['type_desc'], $link);
    
    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd = "INSERT INTO data_type VALUES('$typeid', '$typedesc')";
    $query = mysql_query($cmd,$connect);
    if($query!=false){
        $message = "Data Helpdesk Type Ditambahkan!";
        echo "<script type='text/javascript'>alert('$message'); window.location='helpdesk_admin.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysql_error($connect);
    }
}
mysql_close($connect);

?>