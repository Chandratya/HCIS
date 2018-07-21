<?php
require_once 'connect.php';
header('Content-Type: application/json');
if(isset($_REQUEST['gender']) && $_REQUEST['gender']!=''){
    $req = $_REQUEST['gender'];
    //ALL=SEMUA, P=Wanita, L=LakiLaki
    $sql = "SELECT
                month as bulan,
                count(*) AS total,
                count(CASE WHEN mpe.sex='M' THEN 1 END) AS L,
                count(CASE WHEN mpe.sex='F' THEN 1 END) AS P
            FROM hcis.mpe
            ";
    if(isset($_REQUEST['month']) && $_REQUEST['month']!=''){
        $sql .= " ";
        $sql .= sprintf("WHERE lower(month) like '%s'", $_REQUEST['month']);
    }else{
        $sql .= " GROUP BY `month`";
    }
    $exec = mysqli_query($connect, $sql);
    $data = [];
    if($exec){
        while($row = mysqli_fetch_assoc($exec)){
            //Standarize Naming Bulan
            if($row['bulan']=='Juli'){$row['bulan']='Jul';}
            if($row['bulan']=='Mei'){$row['bulan']='May';}
            if($row['bulan']=='Juni'){$row['bulan']='Jun';}
            //add to Data
            array_push($data,$row);
        }
        //Sorting by Month
        usort($data, function($a,$b){
            return date_parse($a['bulan'])['month'] - date_parse($b['bulan'])['month'];
        });
        //Render It Json
        echo json_encode($data);
    }else{
        die(mysqli_error($connect));
    }
}