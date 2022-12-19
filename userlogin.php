<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<?php include "assets/csslink.php";?>

<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="logimg">
			<nav class="navbar navbar-expand-md ">
		<div class="container">
			<a href="" class="navbar-brand text-warning font-weight-bold" >Technical Pankaj</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar"><span class="navbar-toggler-icon"></span></button>

			<div class="collapse navbar-collapse text-center" id="collapsenavbar">
				<ul class="navbar-nav ml-auto font-weight-bold ">
					<li class="nav-item">
						<a href="" class="nav-link text-white">Home</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link text-white">Downloads</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link text-white">More</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link text-white">About</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link text-white">Contact-us</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>
<div class="container">
	
<div class="row">
	<div class="col-lg-6 mx-auto mt-5">
		<div class="card">
			<form class="myform" action="userloginphp.php" method="POST">
			<div class="card-header " style="background:linear-gradient( #ffffcc,#e6ffe6)">
				<h3 class="text-center font-weight-bold">Login Form</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
				<label>Username</label>
			<input type="text" name="mobile" id="mobile" placeholder="Enter Username" class="form-control">
			</div>

			<div class="form-group">
				<label>Password</label>
			<input type="password" name="password" id="password" placeholder="Enter password" class="form-control">
			</div>
			<div class="bg-transparent text-center">
				<button type="button" id="login" name="login" class="btn btn-primary btn-lg login btn-block">Login</button>
			</div>
			<div>
				<a id="link1" class="text-primary text-lg-left link" href="index.php">? Register Here...</a>
			</div>
			</div>
		</form>
		</div>
		<div class="msg text-white"></div>
	</div>
	
</div>	
</div>
</div>


<?php include "assets/jslink.php";?>
</body>
</html>


<script type="text/javascript">
	
$(document).ready(function(){

$('#login').click(function() {

	var mobile=$('#mobile').val();
	var password=$('#password').val();

	if (mobile=="" && password=="") {

		$('#mobile').addClass('is-invalid');
		$('#password').addClass('is-invalid');
		
	}else{

		$('#name').removeClass('is-invalid');
		$('#password').removeClass('is-invalid');
		$.ajax({
			url:"userloginphp.php",
			type:'post',
			data:{
				login:1,
				mobile:mobile,
				password:password
			},
			success:function(data){

					if (data==1) {

						$('.msg').html("<div class='alert alert-success text-success font-weight-bold text-center mt-3'>Login Successfull</div>").fadeOut(8000);
								setTimeout(function(){
							window.location.replace("index1.php");
						},700);

					}else{
						$('.msg').html("<div class='alert alert-danger text-danger font-weight-bold text-center ml-auto mt-3'>Invalid Crediantials </div>").fadeOut(8000);
							
						setTimeout(function(){
							window.location.reload();
						},700);
					}
			}


		});
	
	}

});

$('#link').click(function() {

$('#link').attr("href","signup.php");

});

});

</script>


