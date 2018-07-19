<?php

include './connect.php';

if(isset($_POST['submit'])){
    $link = mysql_connect("localhost", "root", "", "hcis") or die($link);

    $place = mysql_real_escape_string($_POST['penempatan'], $link);
    $jk = mysql_real_escape_string($_POST['jk'], $link);
    $datein =  mysql_real_escape_string($_POST['date_in'], $link);
    $dateout = mysql_real_escape_string($_POST['date_out'], $link);
    $q1 = mysql_real_escape_string($_POST['q1'], $link);
    $q2 = mysql_real_escape_string($_POST['q2'], $link);
    $q3 =  mysql_real_escape_string($_POST['q3'], $link);
    $q4 =  mysql_real_escape_string($_POST['q4'], $link);
    $q5 =  mysql_real_escape_string($_POST['q5'], $link);
    $q6 =  mysql_real_escape_string($_POST['q6'], $link);
    $q7 =  mysql_real_escape_string($_POST['q7'], $link);
    $q8 =  mysql_real_escape_string($_POST['q8'], $link);
    $q9 =  mysql_real_escape_string($_POST['q9'], $link);
    $q10 =  mysql_real_escape_string($_POST['q10'], $link);
    $q11 =  mysql_real_escape_string($_POST['q11'], $link);
    $q12 =  mysql_real_escape_string($_POST['q12'], $link);
    $q13 =  mysql_real_escape_string($_POST['q13'], $link);
    $q14 =  mysql_real_escape_string($_POST['q14'], $link);
    $q15 =  mysql_real_escape_string($_POST['q15'], $link);
    $q16 =  mysql_real_escape_string($_POST['q16'], $link);
    $q17 =  mysql_real_escape_string($_POST['q17'], $link);
    $q18 =  mysql_real_escape_string($_POST['q18'], $link);
    $q19 =  mysql_real_escape_string($_POST['q19'], $link);
    $q20 =  mysql_real_escape_string($_POST['q20'], $link);
    $q21 =  mysql_real_escape_string($_POST['q21'], $link);
    $q22 =  mysql_real_escape_string($_POST['q22'], $link);
    $q23 =  mysql_real_escape_string($_POST['q23'], $link);
    $q24 =  mysql_real_escape_string($_POST['q24'], $link);
    $q25 =  mysql_real_escape_string($_POST['q25'], $link);
    $checkbox1 = mysql_real_escape_string($_POST['reason'], $link);
    $cmt = mysql_real_escape_string($_POST['comment'], $link);
    

   /* for ($i = 0; $i <count($checkbox1);$i++){
        if(!empty($checkbox1)){


        $query = "INSERT INTO exit_form(reason) VALUES ('".$checkbox1[$i]."')";
        mysql_query($query, $connect) or die (mysql_error());
        }
    }
    echo "checkbox are inserted";*/

    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd = "INSERT INTO exit_form VALUES(id_exit, '$place', '$jk', '$datein', '$dateout', '$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$checkbox1', '$cmt')";
    $query = mysql_query($cmd,$connect);
    if($query!=false){
        $message = "Data Exit Questionnaire Berhasil Ditambahkan!";
        echo "<script type='text/javascript'>alert('$message'); window.location='dis_exit_input.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysql_error($connect);
    }
}
mysql_close($connect);

?>