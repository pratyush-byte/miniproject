<?php

session_start();
header("location:EE.php");



$con2 = mysqli_connect('localhost','root');

if($con2)
{
   echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con2,'logincredenstials');

$id  =  $_POST['id'];
$name = $_POST['username'];
$stock = $_POST['number'];



$q = "SELECT * FROM eee where NAME='$name' && Id ='$id' ";

$result = mysqli_query($con2,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	/*$_SESSION['username'] = $name ;
	header('location:stock.php');
	echo "connected";*/
	echo "the item already exists " ;
	$qx = "UPDATE `eee` SET `STOCK`='$stock' WHERE NAME ='$name' " ;
	mysqli_query($con2, $qx);

}else{
	
	/*header('location:departmental.php');
	echo "not correct";*/
	$qy = "INSERT INTO eee(NAME, STOCK , ID) VALUES ('$name','$stock','$id') " ;
	mysqli_query($con2, $qy);

}


?>