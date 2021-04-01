<?php

session_start();
header("location:ECE.php");



$con1 = mysqli_connect('localhost','root');

if($con1)
{
   echo "connection successful";
}else{
  echo "no connection";
}

mysqli_select_db($con1,'logincredenstials');

$id  =  $_POST['id'];
$name = $_POST['username'];
$stock = $_POST['number'];



$q = "SELECT * FROM ece where NAME='$name' && Id ='$id' ";

$result = mysqli_query($con1,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
  /*$_SESSION['username'] = $name ;
  header('location:stock.php');
  echo "connected";*/
  echo "the item already exists " ;
  $qx = "UPDATE `ece` SET `STOCK`='$stock' WHERE NAME ='$name' " ;
  mysqli_query($con1, $qx);

}else{
  
  /*header('location:departmental.php');
  echo "not correct";*/
  $qy = "INSERT INTO ece(NAME, STOCK , ID) VALUES ('$name','$stock','$id') " ;
  mysqli_query($con1, $qy);

}


?>