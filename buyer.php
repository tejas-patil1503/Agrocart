<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>testing</title>
	<?php include "assets/csslink.php"?>
	<?php include "assets/jslink.php"?>
	<link rel="stylesheet" href="">
</head>
<body>

<table class="table table-hover" >
<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>QUANTITY</th>
	<th>PRICE</th>
	<th>Stock Update</th>
</tr>
	<?php
	$con=mysqli_connect("localhost","root","","ecom") or die("connection failed");
if (isset($_POST['qt'])) {
	# code...

	$q="SELECT * FROM ecom";
	$res=mysqli_query($con,$q);
	while ($result=mysqli_fetch_assoc($res)) {



$q3="UPDATE  ecom set qty=$qt where id='$_GET[id]'";
      $res3=mysqli_query($connect,$q3);
  if ($res3) {


}
}
}
?>


<?php
$q1="SELECT * FROM ecom";
	$sel=mysqli_query($con,$q1);
	while ($res=mysqli_fetch_assoc($sel)) {
?>
	<tr>
		<td><?php echo $res['id'];?></td>
		<td><?php echo $res['mtxt'];?></td>
		<td><?php echo $res['qty'];?></td>
		<td><?php echo $res['price'];?></td>

<td>
	<form action="test.php?action=add&id=<?php echo $row['id'];?>">
<input type="text" name="qt">
<input type="submit" name="update" style="margin-top:5px;" class="btn btn-success addcart" value="update" />
</form>
</td>
<?php
}
?>
</tr>
	<?php


	?>
</table>
</body>
</html>