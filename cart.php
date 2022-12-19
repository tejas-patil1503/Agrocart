<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Tejas Patil">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>
 
<?php include "assets/csslink.php"?>	
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php"><i class="fa fa-mobile-alt"></i>&nbsp;&nbsp;AgroCart</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="ecom1.php"><i class="fa fa-mobile-alt mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fa fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div id="msg" class="text-danger"></div>
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <!-- <th>Available</th> -->
                <th>Quantity</th>
                <th>Total Price</th>
               <!--  <th>
                  <a href="upload.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th> -->
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $con->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['id'] ?></td>

                <input type="hidden" class="id" value="<?= $row['id'] ?>">
                <td><img src="<?= $row['image'] ?>" width="50"></td>
            
                <td><?= $row['name'] ?></td>
                <td>
                  <i class="fa fa-rupee"></i>&nbsp;&nbsp;<?= number_format($row['price'],2); ?>
                </td>
                <input type="hidden" class="price" value="<?= $row['price'] ?>">
                  <!-- <td><?= $row['quantity']; ?></td> -->
                 <td><?= $row['qty']; ?></td>
              
             
                <td><i class="fa fa-rupee"></i>&nbsp;&nbsp;<?= number_format($row['total'],2); ?></td>
           <td>
                  <a href="upload.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fa fa-trash"></i></a>
                </td> 
              </tr>
              <?php $grand_total += $row['total']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="ecom1.php" class="btn btn-success"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class="fa fa-rupee"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

 
  <?php include "assets/jslink.php"?>	



<script type="text/javascript">
  $(document).ready(function() {

    $('.qty').on('change',function(){

     var $el = $(this).closest('tr');

      var id=$el.find('.id').val();
      var price=$el.find('.price').val();
      var qty=$el.find('.qty').val();
      var aqty=$el.find('.aqty').val();

 location.reload(true);

      $.ajax({
        url:'upload.php',
        method:'post',
        cache:false,
        data:{
          qty:qty,
          id:id,
          price:price,
          aqty:aqty
        },
        success:function(response){
          console.log(response);

        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'upload.php',
        method: 'get',
        data: {
          cartitem: "cartitem"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>



</body>
</html>