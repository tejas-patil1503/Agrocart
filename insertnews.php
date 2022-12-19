<?php

$con=mysqli_connect("localhost","root","","ecom");

if (isset($_POST['add'])) {
	

	$news=$_POST['news'];


	$q1="insert into news(news) values('$news')";
	$qe=mysqli_query($con,$q1);
	if($qe){

		?>
		<script type="text/javascript">
			alert("Inserted Successfully");
			window.location="scheme.php";
		</script>

		<?php

	}else{
		?>

		<script type="text/javascript">
			alert("Failed to insert");
			location.reload();
		</script>


		<?php
	}

}

?>



