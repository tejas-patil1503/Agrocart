<?php

session_start();
include "config.php";

if (isset($_POST['submit'])) {
	
	// $id=$_POST['id'];
	$mtxt=$_POST['mtxt'];
	$unit=$_POST['unit'];
 	$qty=$_POST['qty'];
	$cat=$_POST['cat'];
	$descr=$_POST['descr'];
	$price=$_POST['price'];
	$file=$_FILES['image'];
	$quantity=$_POST['quantity'];
	$pcode=$_POST['pcode'];

	$filename=$file['name'];
	$path=$file['tmp_name'];
	$error=$file['error'];
	$file_ext=explode(".",$filename);
	$check=strtolower(end($file_ext));
	$valid=array('png','jpg','jpeg');

	$_SESSION['mtxt']=$_POST['mtxt'];
	$_SESSION['qty']=$_POST['qty'];
	$_SESSION['cat']=$_POST['cat'];
	$_SESSION['descr']=$_POST['descr'];
	$_SESSION['price']=$_POST['price'];
	$_SESSION['image']=$_POST['image'];

		
	if($error == 0)
			{
				if ($mtxt=="") 
				{
					?>
					<script type="text/javascript">
					alert("please fill all fields");
					</script>
					<?php
				}
				else
				{
					$_SESSION['mtxt']=$_POST['mtxt'];
					if (in_array($check,$valid)) 
					{
						$_SESSION['mtxt']=$_POST['mtxt'];
						$dest='img/'.$filename;
						move_uploaded_file($path, $dest);
						$_SESSION['mtxt']=$_POST['mtxt'];
						$sql="insert into ecom(mtxt,unit,qty,cat,price,descr,image,pcode)values('$mtxt','$unit','$qty','$cat','$price','$descr','$dest','$pcode')";
						$q=mysqli_query($con,$sql);
						if ($q)
						{
							$_SESSION['mtxt']=$_POST['mtxt'];
							echo 1;
							?>

							<script type="text/javascript">
									alert("Uploaded");
									window.location="ecom1.php";
							</script>
							<?php
						}
						else
						{
							echo 2;
							echo "failed";
						}
					}
					else
					{
						?>
						<script type="text/javascript">
							alert("invalid extension");
							window.location="addproduct.php";
						</script>
						<?php
					}
				}
		}	
}



	// Add products into the cart table
	if (isset($_POST['qty'],$_POST['name'],$_POST['pcode'])) {

			$id=$_POST['id'];
			$name=$_POST['name'];	
			$price=$_POST['price'];
			$image=$_POST['image'];
			$qty=$_POST['qty'];
			$aqty=$_POST['aqty'];
			$pcode=$_POST['pcode'];

			
			$total=$qty * $price;

	if ($qty>$aqty) {
		 echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Not Enough stock</strong>
						</div>';
						return false;
	}
	else {
			if($qty<=0) {
			 echo '<div class="alert alert-danger alert-dismissible mt-2">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Enter Valid Number </strong>
							</div>';
							return false;
			}

			else{


				$q1="SELECT * FROM ecom  ";
					$res1=mysqli_query($con,$q1);
					$r1=mysqli_fetch_assoc($res1);


				$sm="UPDATE ecom set qty=$aqty-$qty,quantity='$qty' WHERE pcode='$pcode'";
				$up=mysqli_query($con,$sm);
				if ($up) {
					
					echo '';	
				
				}
			}

					
					

									$q="SELECT pcode FROM cart WHERE pcode='$pcode' ";
									$res=mysqli_query($con,$q);
									$r=mysqli_fetch_assoc($res);

									$code=$r['pcode'];


									if (!$code) 
									{
									
										 $stmt="INSERT INTO cart(name,price,image,qty,quantity,total,pcode) VALUES('$name','$price','$image','$qty','$aqty','$total','$pcode')";
										$re=mysqli_query($con,$stmt);

										 echo '<div class="alert alert-success alert-dismissible mt-2">
													  <button type="button" class="close" data-dismiss="alert">&times;</button>
													  <strong>Item added to your cart!</strong>
												</div>';
										
							
									}
									else
									{
										 echo '<div class="alert alert-danger alert-dismissible mt-2">
												  <button type="button" class="close" data-dismiss="alert">&times;</button>
												  <strong>Item already added to your cart!</strong>
												</div>';
									}
								
			
		}
}

	
if (isset($_GET['cartitem']) && isset($_GET['cartitem'])=='cartitem') {
	
	$stmt="SELECT * FROM cart";
	$res=mysqli_query($con,$stmt);
	$row=mysqli_num_rows($res);
	echo $row;
}

if (isset($_GET['remove'])) {
	



	$id=$_GET['remove'];
	$stmt="DELETE FROM cart WHERE id='$id' ";
	mysqli_query($con,$stmt);


	$_SESSION['showalert']="block";
	$_SESSION['message']="Item Removed from cart!";
	header("location:cart.php");

}
// ----------------------------------remove evrything---------------------------
if (isset($_GET['clear'])) {
	$stmt="DELETE FROM cart";
	mysqli_query($con,$stmt);
	$_SESSION['showalert']="block";
	$_SESSION['message']="All item removed from the cart!";
	header("location:ecom1.php");
}

if (isset($_POST['qty'])) {
	
	$qty=$_POST['qty'];
	$id=$_POST['id'];
	$price=$_POST['price'];
	$aqty=$_POST['aqty'];

	$tprice=$qty * $price;
	

	$stmt="UPDATE cart set qty='$qty', quantity=quantity-$qty, total='$tprice' WHERE id='$id' ";
	mysqli_query($con,$stmt);

}

if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['pmode'];

	  $data = '';

	  $stmt = $con->prepare('INSERT INTO orders (name,email,address,pmode,products,amount_paid)VALUES(?,?,?,?,?,?)');
	  $stmt->bind_param('ssssss',$name,$email,$address,$pmode,$products,$grand_total);
	  $stmt->execute();
	  $stmt2 = $con->prepare('DELETE FROM cart');
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $products . '</h4>
								<h4>Your Name : ' . $name . '</h4>
								<h4>Your E-mail : ' . $email . '</h4>
						
								<h4>Total Amount Paid : ' . number_format($grand_total,2) . '</h4>
								<h4>Payment Mode : ' . $pmode . '</h4>
						  </div>';
	  echo $data;
	}

?>