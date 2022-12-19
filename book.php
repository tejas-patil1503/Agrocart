<?php

$con=mysqli_connect("localhost","root","","ecom");


if (isset($_POST['login'])) {
$name=$_POST['name'];
$mno=$_POST['mno'];
$email=$_POST['email'];
$address=$_POST['address'];


$q="insert into ordernow (name,mno,email,address) values('$name','$mno','$email','$address')";
if(mysqli_query($con,$q))
{
	$_SESSION['name']=$_POST['name'];
	echo 1;
}else{
	echo 2;
}
}

?>