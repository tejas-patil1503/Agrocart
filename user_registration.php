<?php
session_start();

include "db.php";
if (isset($_POST['login'])) {
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
			$_SESSION['email']=$_POST['email'];
		
	$sql="SELECT id FROM ecomlogin WHERE  mobile='$mobile'";
	$res=mysqli_query($con,$sql);
	if (mysqli_fetch_array($res)>0) {
		
		echo 1;
		
	}else{
		$sql1="INSERT INTO ecomlogin(fname,lname,mobile,email,password,address) VALUES ('$fname','$lname','$mobile','$email','$password','$address')";
		$result=mysqli_query($con,$sql1);
		if ($result) {
			$_SESSION['email']=$_POST['email'];
			
			echo 2;
			
		}else{
			echo 3;
		}
	}
}
?>