


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forgot</title>
	<?php include "assets/csslink.php"?>
	<?php include "assets/jslink.php"?>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bgimg">
<div class="container">
	<div class="forgotmbg"></div>
	   <div class="forgotbg">


	   	<div class="card-deck">
	   		<div class="card">
	   			<h2 class="card-header text-center text-danger">Forgot Password</h2>
	   			<div class="card-body">
	   				<form action="forgot.php" method="POST">
	   					  <div class="form-group">
                        <label for="mobile1">Mobile Number</label>
                        <input type="text" name="mobile" id="mobile1" placeholder="Enter Mobile number" pattern="[6789][0-9]{9}" class="form-control" required="">
                        <span class="err text-danger"></span>
                      </div>
                      <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="pass" id="pass1" placeholder="Enter New password" pattern="[a-zA-Z0-9]{3,8}" class="form-control" required>
                        <span ><i class="fa fa-eye" id="shp" ></i></span>
                      </div>
                      <span class="err1 text-danger"></span>
                   	<button type="submit" name="submit"  class="btn btn-success btn-block">Change</button>
                    </div>
                </form>
	   			</div>
	   		</div>
	   		
	   	</div>
   				
</div>



<?php
require "config.php";
if (isset($_POST['submit'])) {
	
	$mobile=$_POST['mobile'];
	$pass=$_POST['pass'];

	if (empty($mobile) && empty($pass)) {
		
		echo "enter";
	}
else{



	$sql="SELECT id FROM ecomlogin WHERE  mobile='$mobile'";
	$res=mysqli_query($con,$sql);
	if (mysqli_fetch_array($res)>0) {
		
		$for="UPDATE ecomlogin set password='$pass' WHERE mobile='$mobile'";
	$res=mysqli_query($con,$for);
	if ($res) {
		?>

		<script type="text/javascript">
			swal("Changed","Password Changed Successfully","success");
			setTimeout(function(){
			window.location.replace("index.php");
			},1200);

		</script>

		<?php
	}else{
		echo "Failed ";
	}
		
	}

else{


?>
<script type="text/javascript">
	swal("Failed","Seems to be No Valid Account On this mobile Number!!","warning");
</script>

<?php
	
}
}
}





?>





</div>
<?php include "assets/jslink.php"?>
</body>
</html>

<script type="text/javascript">
	


$(document).ready(function(){

const password=$('#pass1');
$('#shp').click(function(event) {
	/* Act on the event */

if(password.prop('type')=='password'){
	$(this).addClass('fa fa-eye-slash');
	password.attr('type','text');
}else{
	$(this).removeClass('fa fa-eye-slash');
$(this).addClass('fa fa-eye');

		password.attr('type','password');
}
});




});

</script>