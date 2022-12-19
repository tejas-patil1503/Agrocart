<?php
session_start();
if (!isset($_SESSION['mobile'])) {
  ?>
<script type="text/javascript">
  window.location.replace("index.php");
</script>
  <?php
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DigiMarket</title>
    <?php include "assets/csslink.php"?>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   
    <div>
      <div>
        <div class="navmain">
          <section>
            <nav class="navbar navbar-expand-lg fixed-top">
              <a class="navbar-brand" href="#">Digi<span class="text-warning font-weight-bold" style="font-size: 1.5em">M</span>arket</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">=</span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#service">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact-Us</a>
                  </li>
                    <li class="nav-item">
                   
               <a class="nav-link" data-toggle="modal" data-target="#myModal">Cart <i class="fa fa-shopping-cart text-warning pl-1"></i></a> 
              </li>
                <li>


                </li>
               <li class="nav-item" id="signup1">
               
                <a href="logout.php" role="button" class="text-light btn btn-danger"><span class="text-white">Logout</span>
                  <i class="fa fa-switc-hoff"></i></a>
              </li>        

                </ul>
              </div>
            </nav>
          </section>
        </div>



<div>
  



<div class="modal" id="myModal">
  <div class="modal-dialog1 mx-auto w-75">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title1 ml-auto text-warning">MY CART<i class="fa fa-shopping-cart  text-success fa-2x pl-2"></i></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       


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
          echo '<script>window.location = "ecom.php"</script>';
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
                echo '<script>window.location="ecom.php</script>';
              }
            }
      }
    }





?> 

                     <table class="table table-bordered" >
                           <div class="modal-body">  
                          <tr class="w-50"> 
                              <th>product image</th> 
                               <th class="">Item Name</th>  
                               <th >Quantity</th>  
                               <th >Price</th>  
                               <th >Total</th>  
                               <th>Action</th>  
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
                               <td><a href="ecom.php?action=delete&id=<?php  echo $value['item_id'];?>"><span class="btn btn-danger">Remove</span></a></td>  
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

      <!-- Modal footer -->
      <div class="modal-footer">
        <form action="buynowecom.php" method="POST">
           <button type="submit"  class="btn btn-primary ml-auto" >Proceed To Buy</button>
 
        <button type="button" class="btn btn-danger text-white mr-auto" data-dismiss="modal">Close</button>
               </form>
      </div>

    </div>
  </div>
</div>






</div>




        <!-- Button to Open the Modal -->
        
        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog ">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <div class="buyer1">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control p-3 mb-2">
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="lname" id="lname" placeholder=" Last Name" class="form-control p-3 mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="mobile" id="mobile" placeholder=" Mobile Number" class="form-control p-3 mb-2">
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <input type="email" name="email" id="email" placeholder=" Email" class="form-control p-3 mb-2">
                      </div>
                    </div>
                    <div class="">
                      <input type="text" name="password" id="password" placeholder="password" class="form-control mb-2 p-3">
                    </div>
                    <div class="">
                      <textarea  name="address" id="address" class="form-control p-2 mb-2" placeholder="address"></textarea>
                    </div>
                  </div>
                  <div class="fb">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="farmer1">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control p-3 mb-2">
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="lname" id="lname" placeholder=" Last Name" class="form-control p-3 mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="mobile" id="mobile" placeholder=" Mobile Number" class="form-control p-3 mb-2">
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="password" id="password" placeholder="password" class="form-control mb-2 p-3">
                      </div>
                    </div>
                    <div class="">
                      <textarea  name="address"  id="address" class="form-control p-2 mb-2" placeholder="address"></textarea>
                    </div>
                  </div>
                  <div class="fb">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 col-lg-2">
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <span class="fr">Farmer&nbsp&nbsp</span><input type="radio" name="rdb"  id="farmer" checked="1">
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <span class="by">Buyer  &nbsp</span><input type="radio" class="" name="rdb"  id="buyer" >
                  </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" id="button1" class="btn btn-success button1">Submit</button>
                  <button type="button" id="button2" class="btn btn-warning button2">Submit2</button>
                  <button type="button" class="btn btn-danger d-inline" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section>
          <div class="maincaraouselbg"></div>
          <div class="maincaraousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active">></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/b4.jpg" class="d-block w-100" height="740px" style="object-fit: cover" alt="...">
         
                </div>
                <div class="carousel-item">
                  <img src="img/b8.jpg" class="d-block w-100"  height="740px" style="object-fit: cover" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/b15.jpg" class="d-block w-100"  height="740px" style="object-fit: cover" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
          </div>
        </section>
       

       
           <section> 
            <div class="producttext">
              <h2>Products</h2>
              <p>Buy or Sell It's Now Easier</p>
            </div>
          <div class="ecardmain">


            <div class="row">
         
                                
                  <?php
                    $qury = "SELECT * FROM ecom ORDER BY id ASC";
                    $result = mysqli_query($connect,$qury);
                    if(mysqli_num_rows($result) >0)
                    {
                      while($row = mysqli_fetch_array($result))
                      {

                  ?>
                   
                         <div class="col-lg-3 p-3">
                          <div class="card">
                                    
                            <form method="post" action="ecom.php?action=add&id=<?php echo $row['id'];?>">  
                            <img class="card-img-top" src="<?php echo $row['image']?>" width="300px" height="200px" alt="Card image">
                              <div class="card-body"> 
                               <h4 class="text-info text-center"><?php echo $row['mtxt'];?></h4> 
                               <p class="card-text"><span class="text-info font-weight-bold">Category:-</span><span class="text-success font-weight-bold"><?php echo $row['cat']?></span></p>
                    <p class="card-text"><span class="text-info font-weight-bold">Description:-</span><span class="text-success "><?php echo $row['descr']?></span></p> 
                               <h4 class=""><span class="text-danger">Rs</span><span style="font-size: 0.8em;" >/</span><span style="font-size: 0.8em;" class="text-warning">kg   </span><span class="text-success"><?php echo $row['price'];?></span></h4>  
                           <div class="row">
                            <div class="col-lg-6">
                              <p class="text-info">Qty:-</p>
                            </div>
                            <div class="col-lg-6">   
                               <input type="number" name="quantity" class="form-control" value="1" />
                            </div>
                          </div>
                            <input type="hidden" name="hidden_mtxt" value="<?php echo $row['mtxt'] ?>" />
                           <input type="hidden" name="hidden_image" value="<?php echo $row['image'];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success addcart" value="Add to Cart" />
                                       </form>  
                          </div>  
               
                </div>  
              </div>
                  <?php } ?>
          </div>
          </div>
        </section>
        <?php

        } ?>
      </div>
    </div>
    <?php include "assets/jslink.php"?>
  </body>
</html>
<script type="text/javascript">


$(document).ready(function(){

$('.addcart').click(function(event) {

swal("success","Item Added Successfully","success");
setTimeout(function(){
window.location.reload("ecom.php");
},3000);
  /* Act on the event */
});

$('.farmer1').show();
$('.buyer1').hide();
$('.button2').show();
$('.button1').hide();
$('.modal-title').html('Farmer-Registration');
$('.fr').css({'color':'green','font-weight':'bold'});
var modalt=$('.modal.title').val();
$('#buyer').click(function(){
$('.buyer1').show();
$('.farmer1').hide();
$('.button2').hide();
$('.button1').show();
$('.modal-title').html('Customer-Registration');
$('.fr').css('color','#777');
$('.by').css({'color':'green','font-weight':'bold'});
});
$('#farmer').click(function(){
$('.farmer1').show();
$('.buyer1').hide();
$('.button1').hide();
$('.button2').show();
$('.modal-title').html('Farmer-Registration');
$('.fr').css({'color':'green','font-weight':'bold'});
$('.by').css('color','#777');
});

$('.button1').click(function(){

var fname=$('#fname').val();
var lname=$('#lname').val();
var mobile=$('#mobile').val();
var email=$('#email').val();
var address=$('#address').val();
  if (fname=="" && lname=="" && mobile=="" && email=="" && address=="" && password=="") {


    $('#fname').addClass('is-invalid');
    $('#lname').addClass('is-invalid');
    $('#mobile').addClass('is-invalid');
    $('#email').addClass('is-invalid');
    $('#address').addClass('is-invalid');
    $('#password').addClass('is-invalid');
    

  }else{

    $('#fname').addClass('is-valid');
    $('#lname').addClass('is-valid');
    $('#mobile').addClass('is-valid');
    $('#email').addClass('is-valid');
    $('#address').addClass('is-valid');
    $('#password').addClass('is-valid');
   

  }

});




});
</script>





