

<?php
$con=mysqli_connect("localhost","root","","quantity");
	if ($con) {
		# code...
		echo "connected";
	}else{
		echo "not";
	}
if(isset($_POST['submit'])){
	
	$qt1=$_POST['qt1'];
	$name=$_POST['name'];

	
	$q1="insert into qty(qt1,name) values ('$qt1','$name')";
	$res=mysqli_query($con,$q1);
	if ($res) {

			echo "inserted";

				
								
								
							
}
else{
	echo "failed";
}

}


if (isset($_POST['update'])) {

$qt2=$_POST['qt2'];

$q3="UPDATE  qty set qt1=qt1-$qt2 ";
			$res3=mysqli_query($con,$q3);
			
			if ($res3) {
					# code...
				$q2="select * from qty";
								$res2=mysqli_query($con,$q2);
						
										while ($f=mysqli_fetch_assoc($res2))
										 {
										?>


										<table border="1">
											<tr>
												<td><?php echo $f['qt1'];?></td>
											</tr>
										</table>


										<?php
												

										  }

				}	

}
?>