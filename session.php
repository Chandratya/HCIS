<?php

include 'connect.php';

if(isset($_SESSION['user'])){

	$id_user = $_SESSION['id'];
	
	$cmd = "SELECT * FROM user WHERE id_user= '$id_user'";
	$query = mysqli_query($connect, $cmd);

	$getUser = mysqli_fetch_array($query);

	

	

	//var_dump($getUser);
}else{
    $message = "Anda harus login terlebih dahulu!";
	echo "<script type='text/javascript'>alert('$message'); window.location='login.php';</script>";
}

?>