<?php

session_start();
header("location:ME.php");



$con = mysqli_connect('localhost','root');

if($con)
{
   echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con,'logincredenstials');

$id  =  $_POST['id'];
$name = $_POST['username'];
$stock = $_POST['number'];



$q = "SELECT * FROM me where NAME='$name' && Id ='$id' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	/*$_SESSION['username'] = $name ;
	header('location:stock.php');
	echo "connected";*/
	echo "the item already exists " ;
	$qx = "UPDATE `me` SET `STOCK`='$stock' WHERE NAME ='$name' " ;
	mysqli_query($con, $qx);

}else{
	
	/*header('location:departmental.php');
	echo "not correct";*/
	$qy = "INSERT INTO me(NAME, STOCK , ID) VALUES ('$name','$stock','$id') " ;
	mysqli_query($con, $qy);

}


?>