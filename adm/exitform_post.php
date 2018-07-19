<?php

include '../connect.php';

if(isset($_POST['submit'])){
    $link = mysql_connect("localhost", "root", "", "hcis") or die($link);

    $nama = mysql_real_escape_string($_POST['nama_karyawan'], $link);
    $jabatan = mysql_real_escape_string($_POST['jabatan_terakhir'], $link);
    $dept = mysql_real_escape_string($_POST['departemen'], $link);
    $nik =  mysql_real_escape_string($_POST['no_karyawan'], $link);
    $datein =  mysql_real_escape_string($_POST['date_in'], $link);
    $dateout = mysql_real_escape_string($_POST['date_out'], $link);
    $q1 = mysql_real_escape_string($_POST['q1'], $link);
    $q2 = mysql_real_escape_string($_POST['q2'], $link);
    $q3 =  mysql_real_escape_string($_POST['q3'], $link);
    $asp1 =  mysql_real_escape_string($_POST['aspek1'], $link);
    $asp2 =  mysql_real_escape_string($_POST['aspek2'], $link);
    $asp3 =  mysql_real_escape_string($_POST['aspek3'], $link);
    $asp4 =  mysql_real_escape_string($_POST['aspek4'], $link);
    $asp5 =  mysql_real_escape_string($_POST['aspek5'], $link);
    $asp6 =  mysql_real_escape_string($_POST['aspek6'], $link);
    $asp7 =  mysql_real_escape_string($_POST['aspek7'], $link);
    $cmt =  mysql_real_escape_string($_POST['comment'], $link);
    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd = "INSERT INTO exit_inter VALUES('$nama', '$jabatan', '$dept', '$nik', '$datein','$dateout','$q1','$q2','$q3','$asp1','$asp2','$asp3','$asp4','$asp5','$asp6','$asp7','$cmt', id_inter)";
    $query = mysql_query($cmd,$connect);
    if($query!=false){
        $message = "Data Exit Interview Berhasil Ditambahkan!";
        echo "<script type='text/javascript'>alert('$message'); window.location='dis_int.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysql_error($connect);
    }
}
mysql_close($connect);

?>