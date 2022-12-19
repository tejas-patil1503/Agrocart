<?php
require('config1.php');
require('Razorpay.php');
require_once 'common.php';
session_start();
use Razorpay\Api\Api;
$onlinePay = new STUDENT();
$sql9 = $DB_con->prepare( "select max(pID) as pID from onlinepayment" );
$sql9->execute();
$result9 = $sql9->fetch( PDO::FETCH_ASSOC ) ;
$pID = $result9['pID'];
$mOrderID= "0000".$pID ;
$api = new Api($keyId, $keySecret);

if(isset($_POST['btn-submit']))
{
$name =  $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$typeProduct = $_POST['typeProduct'];
$toValue = $_POST['toValue'];
$message = $_POST['message'];
$razorpayPaymentId ="";
$paymentStatus ="PENDING";
$makerstamp=date('Y-m-d h:i:s');
$updatestamp=date('Y-m-d h:i:s');
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['service'] = $service;
$_SESSION['typeProduct'] = $typeProduct;
$_SESSION['toValue'] = $toValue;
$orderData = [
    'receipt'         => 3456,
    'amount'          => $toValue * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "RRTutors",
    "description"       => "Buying the prodcut of Learning Mobile app development",
    "image"             => "",
    "prefill"           => [
    "name"              => $name,
    "email"             =>$email,
    "contact"           => $phone,
    ],
    "notes"             => [
    "address"           => "Online Payments",
    "merchant_order_id" => $mOrderID,
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

		if($onlinePay->razorPayOnline($name,$email,$phone, $service, $typeProduct, $toValue, $message,$razorpayOrderId,$razorpayPaymentId,$paymentStatus,$makerstamp,$updatestamp))
			
		{			
			//$successMSG = "Your payment has been done successfully.";
			$json = json_encode($data);
		}
		else
		{
			$errMSG = "sorry , Query could no execute...";
		}		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Razorpay | Payment Gateway Integration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="container-contact100">
  <div class="wrap-contact100">

<table>
  <tr>
    <td class="txt-agl-rt">Your Name</td>
    <td class="txt-agl-lt"><?php echo $name; ?></td>
  </tr>
  <tr>
    <td class="txt-agl-rt">Your Email</td>
    <td class="txt-agl-lt"><?php echo $email; ?></td>
  </tr>
  <tr>
    <td class="txt-agl-rt">Mobile Number</td>
    <td class="txt-agl-lt"><?php echo $phone; ?></td>
  </tr>
  <tr>
    <td class="txt-agl-rt">Selected Service</td>
    <td class="txt-agl-lt"><?php echo $service; ?></td>
  </tr>
  <tr>
    <td class="txt-agl-rt">Product Type</td>
    <td class="txt-agl-lt"><?php echo $typeProduct; ?></td>
  </tr>
  <tr>
    <td class="txt-agl-rt">Amount</td>
    <td class="txt-agl-lt"><?php echo $toValue; ?></td>
  </tr>
</table>	
<div class="payment">
   <form action="verify.php" method="POST">
	<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
	     <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
<input type="hidden" name="callback_url" value="verify.php">
<input type="hidden" name="cancel_url" value="verify.php">
</form>
	</div>	  

  </div>
</div>
<!--===============================================================================================--> 
<script src="js/main.js"></script> 

</body>
</html>
