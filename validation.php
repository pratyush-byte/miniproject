<?php

session_start();



$con = mysqli_connect('localhost','root');

if($con)
{
   echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con,'logincredenstials');

$name = $_POST['username'];
$password = $_POST['password'];


$q = "SELECT * FROM login where name='$name' && password='$password' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $name ;
	header('location:stock.php');
	echo "connected";
}else{
	
	header('location:departmental.php');
	echo "not correct";
}


?>