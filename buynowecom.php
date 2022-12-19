<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>book</title>
  <?php include "assets/csslink.php"?>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  

<div class="buynowmain">
<div class="buynowsub">
  <div class="buynowbg"></div>
  <section>
           <div class="producttext">
              <h2>Buy now</h2>
              <p>Buy or Sell It's Now Easier</p>      
            </div>
          <div class="ecardmain">

  <div class="buynowinput">
  <div class="row">

                           
              

<div class="col-lg-7 mt-4">

<?php
//connection to database
  // session_start();

  $connect = mysqli_connect('localhost','root','','ecom');

    if(isset($_POST["add_to_cart"]))
    {
      if(isset($_SESSION["shopping_cart"]))
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
          $count = count($_SESSION["shopping_cart"]);
    //get all item detail
            $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'product_img'   =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_mtxt"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]

            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
          //product added then this block 
          echo '<script>alert("Item allready added ")</script>';
          echo '<script>window.location = "cart.php"</script>';
        }
      }
      else
      {
        //cart is empty excute this block
         $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'product_img'     =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_mtxt"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]

            );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
    }
//Remove item in cart 
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $key=>$value)
            {
              if($value["item_id"] == $_GET["id"])
              {
                unset($_SESSION["shopping_cart"][$key]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="cart.php</script>';
              }
            }
      }
    }





?> 

                     <table class="table text-warning" >
                           <div class="modal-body">  
                          <tr class="w-50"> 
                              <th>product image</th> 
                               <th >Item Name</th>  
                               <th >Quantity</th>  
                               <th >Price</th>  
                               <th >Total</th>  
                               
                          </tr>  
                             <?php 
                           if(!empty($_SESSION["shopping_cart"]))
                           {
                            $total = 0;
                            foreach($_SESSION["shopping_cart"] as $key => $value)
                           {

                             ?>
                          <tr> 
                               <td><img src="<?php echo $value['product_img'];?>" style="width: 100px; height: 50px" class="mx-auto"></td>
                             
                               <td><?php echo $value['item_name'];?></td>  
                               <td><?php echo $value['item_quantity']; ?></td>  
                               <td>Rs<?php echo $value['item_price'];?></td>  
                               <td><?php echo number_format($value["item_quantity"] * $value["item_price"],2);?></td>  
                             
                          </tr>  
                          <?php $total = $total + ($value["item_quantity"] * $value['item_price']);
                        }
                        ?>
                           
                          <tr>  
                               <td align="right">Total</td>  
                               <td align="right">Rs <?php echo number_format($total);?></td>  
                               <td></td>  
                          </tr> 
                          <?php } ?> 
                           
                     </table>  

</div>

              <div class="col-lg-5 mt-4">
                <form action="book.php" method="POST">
                <input type="text" class="form-control mb-4 name" name="name" placeholder="Full name">
                <div class="error1 text-danger font-weight-bold"></div>
                <input type="text"  class="form-control  mb-4 mno" name="mno" placeholder="mobile number">
                <div class="error2 text-danger font-weight-bold"></div>
                <input type="text" class="form-control  mb-4 email" name="email" placeholder="email">
                <div class="error3 text-danger"></div>
                <textarea type="text" name="address" class="form-control mb-4 address" placeholder="address"></textarea>
               <div class="error4 text-danger font-weight-bold"></div>
                <div class="error text-danger font-weight-bold" ></div>
               <button type="button" name="login" id="login" class="btn btn-success  btn-block font-weight-bold ord">Order Now</button>

             </form>
              </div>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <form action="buynowecom.php" method="POST">
         
 
               </form>
      </div>

    </div>
  </div>
</div>
            </div>
          
          </div>

        </section>

</div>
</div>

  <?php include "assets/jslink.php"?>
</body>
</html>



<script type="text/javascript">
  $(document).ready(function(){





    $('#login').click(function(){


    var name=$('.name').val();
    var mno=$('.mno').val();
    var email=$('.email').val();
    var address=$('.address').val();

var pat1=/^[a-zA-Z. ]*$/;
var pat2=/^[0-9]{10}$/;

      if (name=="" && mno=="" && email=="" && address=="") {
     

        $('.name').addClass('is-invalid');
          $('.mno').addClass('is-invalid');
            $('.email').addClass('is-invalid');
              $('.address').addClass('is-invalid');
$('.error').html("Please fill all the fields");
              return false;

      }else{

       if (name=="") {
        $('.name').addClass('is-invalid');
        $('.error1').html("Please Enter Name");
        return false;
       }else{
          if (!pat1.test(name)) {
            $('.name').addClass('is-invalid');
            $('.error1').html("Enter only Charecter");
            return false;
          }else{
             $('.name').addClass('is-valid');
              $('.error1').html("");
          }

       }
 if (mno=="") {
        $('.mno').addClass('is-invalid');
        $('.error2').html("Please Enter mobile");
        return false;
       }else{
          if (!pat2.test(mno)) {
            $('.mno').addClass('is-invalid');
            $('.error2').html("Invalid Mobile Number");
            return false;
          }else{
             $('.mno').addClass('is-valid');
              $('.error2').html("");
          }

       }


     if (email=="") {
        $('.email').addClass('is-invalid');
        $('.error3').html("Please Enter email");
        return false;
      } else{
             $('.email').addClass('is-valid');
              $('.error3').html("");
          }

  if (address=="") {
        $('.address').addClass('is-invalid');
        $('.error4').html("Please Enter Address");
        return false;
       }else{
             $('.address').addClass('is-valid');
              $('.error4').html("");
          }

    
$.ajax({

url:"book.php",
type:'POST',
data:{
login:1,
name:name,
mno:mno,
email:email,
address:address
},
success:function(data){
if (data==1) {
  swal("Successfull","Proceeding to Payement Page","success");
  setTimeout(function(){
window.location.replace("payement.php");
},3000);
  
}
if (data==2) {
  swal("Failed","Unable to order","warning");



}
}

})


      }

    });

  });



</script>








