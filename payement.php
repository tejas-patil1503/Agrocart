<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payement</title>
    <?php include "assets/csslink.php"?>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="style.css">


  </head>
  <body>
    
    <div class="payementbg">
      <div class="payementsub">
      <div class="payementback"></div>



        <div class="row ml-5">
          
          <div>
            <div class="codtxtmain">
              <h2><input type="radio" class="form-control radio" name="rdb" value="radio" checked="0">Cash On Delivery</h2>
             <p>Agrocart Provides You To Secure Payment and<br> Cash on Delivery,Buy Your Products at your door step <br>You can Use your Debit/Credit Card</p>
             <p> </p>
            </div>
          </div>
        
        </div>
        <div><h2 class="or">OR</h2></div>
          <div class="col-lg-4 mr-auto">
           <div class="card cod2  mt-5 ">
            <div class="card-header text-center text-secondary">
              <h2>AgriCart Payement</h2>
            </div>
             <div class="card-body">
                <i class="fa fa-credit-card credit-card"></i>
                <input type="text" name="cardnumber" class="form-control pl-4" data-mask="0000 0000 0000 0000" placeholder="CARD NUMBER">
              <div class="row">
                <div class="col-lg-6">
                  <i class="fa fa-calendar calendar"></i>
                  <input type="text" name="expirydate" class="form-control pl-4" data-mask="00/00" placeholder="EXPIRY DATE">
                </div>
                <div class="col-lg-6">
                    <i class="fa fa-lock lock"></i>
                  <input type="text" name="cvc" class="form-control pl-4" data-mask="000" placeholder="CVC">
                </div>
              </div>
                    <i class="fa fa-user user"></i>
              <input type="text" name="name" class="form-control pl-4" placeholder="CARD HOLDER NAME">

              <button type="button" name="login" class="btn btn-primary btn-block mt-3 mx-auto w-50">Pay Now</button>

             </div>
           </div>
          </div>
        </div>




      </div>
    </div>






    <?php include "assets/jslink.php"?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  </body>
</html>
<!-- 
  <div class="row">
          <div class="col-lg-4">
            Cash on delivery
          </div>
          <div class="col-lg-4">
            <div>
              <div class="card">
                <div class="card-header">
                  <h2>DigitalFarm Payement</h2>
                </div>
                <div class="card-body">
                 <i class="fa fa-credit-card"></i>
                 <input type="text" class="form-control  pl-4" name="cardnumber" data-mask="0000-0000-0000-0000" placeholder="Card Number">
                  <div class="row">
                  <div class="col-lg-6">
                     <i class="fa fa-calendar"></i>
                    <input type="text" name="expiry-data" class="form-control  pl-4" data-mask="00 / 00"  placeholder="00 / 00">
                  </div>
                  <div class="col-lg-6">
                  <i class="fa fa-lock"></i>
                  <input type="text" class="form-control pl-4" name="cvc" data-mask="000" placeholder="000">
                  </div>
                </div>
                 <i class="fa fa-user"></i>
                   <input type="text" class="form-control pl-4" name="name" placeholder="Card Holder Name">
                
                </div>
              </div>
            </div>
          </div>
        </div> -->