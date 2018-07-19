<?php
# FileName="connect.php"
$hostname = "localhost";
$database = "hcis";
$username = "root";
$password = "";

$connect = mysqli_connect($hostname, $username, $password)
	or die('Could not connect: ' . mysql_error());
	//Select The database
	$bool = mysqli_select_db($connect, $database);
	if ($bool === False){
	   print "can't find $database";
	}
?>