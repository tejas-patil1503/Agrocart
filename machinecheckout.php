<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT * FROM machinecart";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total'];
	
	 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <?php include "assets/csslink.php"?>  
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php"><i class="fa fa-leaf"></i>&nbsp;&nbsp;AgroCart</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="machine.php"><i class="fa fa-leaf mr-2"></i>Machine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="machinecheckout.php"><i class="fa fa-money mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="machine.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
        	<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT * FROM machinecart";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total'];
	
	 
	
?>
          <h6 class="lead"><b>Machine(s) : </b><?= $row['name']; ?></h6>
<?php }?>
       
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total*24,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="row">
          	<div class="col-lg-6">
          
          <div class="form-group">
            From : <input type="date" id="fromdate" max="" name="fduration" class="form-control fd" placeholder="Enter duration" required>
          </div>
          	</div>
          	<div class="col-lg-6">
          
          <div class="form-group">
           To <input type="date" id="todate" min="" name="tduration" class="form-control td" placeholder="Enter duration" required>
          </div>
          	</div>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  <?php include "assets/jslink.php"?> 

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'index3.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'machineupload.php',
        method: 'get',
        data: {
          cartitem: "cartitem"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }

var dtToday=new Date();
var month=dtToday.getMonth() + 1 ;
var day=dtToday.getDate();
var year=dtToday.getFullYear();
if(month < 10)
	month='0' + month.toString();

if(day < 10)
	day='0' + day.toString();

var maxDate= year + '-' + month + '-' + day;
$('#fromdate').attr('min',maxDate);
var fromdate;
$('#fromdate').on('change',function(){

fromdate = $ (this).val();
$('#todate').prop('min',function(){

return fromdate;

})

});


var todate;

$('#todate').on('change',function(){

todate = $ (this).val();
$('#from').prop('max',function(){

return todate;

})

});


});


  </script>
</body>

</html>