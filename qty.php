<?php

$con=mysqli_connect("localhost","root","","ecom");


if (isset($_POST['add_to_cart'])) {


$quantity=$_POST['quantity'];

$up="update ecom set qty=qty-$quantity";
$upd=mysqli_query($con,$up);
if ($upd) {
	?>

<script type="text/javascript">
	alert("updated");
</script>
	<?php
}

}

	


?>