<?php
session_start();
if (!isset($_SESSION['mobile'])) {
  
header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Weather</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div class="weathermain">
		<iframe src="https://www.accuweather.com/"frameborder="0"></iframe>
	</div>
</body>
</html>