<?php

session_start();

include "db.php";

if (isset($_POST['login'])) {
	

	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	

	$sql="SELECT * FROM ecomlogin WHERE mobile='$mobile' AND password='$password' ";

	$res=mysqli_query($con,$sql);
	

	if (mysqli_num_rows($res)>0) {

	$_SESSION['mobile']=$_POST['mobile'];
		echo 1;

		
	}else{

		echo 2;
	}




}

?>
