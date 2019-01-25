<?php

$con=mysqli_connect('localhost','root','','nulls');
if(mysqli_connect_error()){
	echo mysqli_connect_error();
	exit();
}

$username="a001";
$password="123";

$query="SELECT `username`,`password` FROM `prepaare` WHERE `username`=? AND `paasword`=?";

$stmt=mysqli_prepare($con,$query);//this function will return a object or id;
echo gettype($stmt);


?>