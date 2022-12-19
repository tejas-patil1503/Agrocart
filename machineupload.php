<?php

session_start();
include "config.php";

if (isset($_POST['submit'])) {
	
	// $id=$_POST['id'];
	$mtxt=$_POST['mtxt'];
	$descr=$_POST['descr'];
	$price=$_POST['price'];
	$file=$_FILES['image'];
	$pcode=$_POST['pcode'];

	$filename=$file['name'];
	$path=$file['tmp_name'];
	$error=$file['error'];
	$file_ext=explode(".",$filename);
	$check=strtolower(end($file_ext));
	$valid=array('png','jpg','jpeg');

	$_SESSION['mtxt']=$_POST['mtxt'];
	$_SESSION['price']=$_POST['price'];

		
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
						$sql="insert into machine(mtxt,price,descr,image,pcode)values('$mtxt','$price','$descr','$dest','$pcode')";
						$q=mysqli_query($con,$sql);
						if ($q)
						{
							$_SESSION['mtxt']=$_POST['mtxt'];
							echo 1;
							?>

							<script type="text/javascript">
									alert("Uploaded");
									window.location="machine.php";
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
							window.location="addmachine.php";
						</script>
						<?php
					}
				}
		}	
}






	// Add products into the cart table
	if (isset($_POST['name'],$_POST['pcode'])) {

			$id=$_POST['id'];
			$name=$_POST['name'];	
			$price=$_POST['price'];
			$image=$_POST['image'];
			$pcode=$_POST['pcode'];

			
			$total= $price;

					
					

									$q="SELECT pcode FROM machinecart WHERE pcode='$pcode' ";
									$res=mysqli_query($con,$q);
									$r=mysqli_fetch_assoc($res);

									$code=$r['pcode'];


									if (!$code) 
									{
									
										 $stmt="INSERT INTO machinecart(name,price,image,total,pcode) VALUES('$name','$price','$image','$total','$pcode')";
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

	
if (isset($_GET['cartitem']) && isset($_GET['cartitem'])=='cartitem') {
	
	$stmt="SELECT * FROM machinecart";
	$res=mysqli_query($con,$stmt);
	$row=mysqli_num_rows($res);
	echo $row;
}

if (isset($_GET['remove'])) {
	



	$id=$_GET['remove'];
	$stmt="DELETE FROM machinecart WHERE id='$id' ";
	mysqli_query($con,$stmt);


	$_SESSION['showalert']="block";
	$_SESSION['message']="Item Removed from cart!";
	header("location:machinecart.php");

}
// ----------------------------------remove evrything---------------------------
if (isset($_GET['clear'])) {
	$stmt="DELETE FROM machinecart";
	mysqli_query($con,$stmt);
	$_SESSION['showalert']="block";
	$_SESSION['message']="All item removed from the cart!";
	header("location:machine.php");
}

if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $fduration=$_POST['fduration'];
	  $tduration=$_POST['tduration'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['pmode'];

	  $data = '';

	  $stmt = $con->prepare('INSERT INTO machineorders (name,email,phone,fduration,tduration,address,pmode,products,amount_paid)VALUES(?,?,?,?,?,?,?,?,?)');
	  $stmt->bind_param('sssssssss',$name,$email,$phone,$fduration,$tduration,$address,$pmode,$products,$grand_total);
	  $stmt->execute();
	  $stmt2 = $con->prepare('DELETE FROM machinecart');
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Machine Booked Successfully!!</h2>
								<h4 class="bg-danger text-light rounded p-2">Machine Taken For Rent : ' . $products . '</h4>
								<h4>Your Name : ' . $name . '</h4>
								<h4>Your E-mail : ' . $email . '</h4>
								<h4>Your Phone : ' . $phone . '</h4>
								<h4>Total Amount Paid : ' . number_format($grand_total,2) . '</h4>
								<h4>Payment Mode : ' . $pmode . '</h4>
						  </div>';
	  echo $data;
	}

?>