<?php
session_start();
if (!isset($_SESSION['mobile'])) {

header("location:index.php");
}
  ?>

<!DOCTYPE html>
<html>
  <head>
   

  
    <title>Agro cart</title>
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php include "assets/csslink.php"?>
    <link rel="stylesheet" type="text/css" href="font.css">
  </head>
  <body  style="background: #232427" data-spy="scroll" data-target=".navbar" data-offset="50">
   


 <div class="main">
      <div class="mainbg">
   
      <div>
        <section>
          <nav class="navbar navbar-expand-lg fixed-top">
  <a class="navbar-brand" href="#">Agro<span class="text-warning" style="font-size:1.5em;">c</span>art</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
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
        <a class="nav-link" href="Admin Login.php">Admin</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contact">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contact">Contact-Us</a>
      </li>
     <!--   <li class="nav-item">
        <a class="nav-link" href="#contact"><?php echo $_SESSION['fname'];?></a>
      </li> -->
<!--  <li class="nav-item" > 
                    <a type="button" class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#myModal">
                      Signup &nbsp<i class="fa fa-user text-warning"></i>
                    </a>
                  </li> -->

              <li class="nav-item" id="signup1">
               
                <a href="logout.php" role="button" class="text-light btn btn-danger"><i class="fa fa-user">&nbsp;&nbsp;</i><span class="text-white">Logout</span>
               </a>
              </li>        

    </ul>
  </div>
</nav>
        </section>
      </div>
   <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Registration</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <div class="buyer1">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <form action="user_registration.php" id="mform" method="POST">
                        <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control p-3 mb-2">
                        <div class="error11 text-danger"></div>
                      </div>

                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="lname" id="lname" placeholder=" Last Name" class="form-control p-3 mb-2">
                                  <div class="error12 text-danger"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="mobile" id="mobile" placeholder=" Mobile Number" class="form-control p-3 mb-2">
                                  <div class="error13 text-danger"></div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <input type="email" name="email" id="email" placeholder=" Email" class="form-control p-3 mb-2">
                          <div class="error14 text-danger"></div>
                      </div>

                    </div>
                    <div class="">
                      <input type="text" name="password" id="password" placeholder="password" class="form-control mb-2 p-3">
                              <div class="error15 text-danger"></div>
                    </div>
                    <div class="">
                      <textarea  name="address" id="address" class="form-control p-2 mb-2" placeholder="address"></textarea>
                             <div class="error16 text-danger"></div>
                    </div>
                              <div class="error text-danger"></div>
                  </div>
                </form>
                  <div class="fb">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                      </div>
                    </div>
                  </div>
                </div>
            <!--     <div class="farmer1">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="fname1" id="fname1" placeholder="First Name" class="form-control p-3 mb-2" required>
                        <div class="error1 text-danger"></div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="lname1" id="lname1" placeholder=" Last Name" class="form-control p-3 mb-2" required>
                        <div class="error2 text-danger"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="mobile1" id="mobile1" placeholder=" Mobile Number" class="form-control p-3 mb-2" required>
                        <div class="error3 text-danger"></div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                
                        <input type="text" name="password1" id="password1" placeholder="password" class="form-control mb-2 p-3" required>
                
                        <div class="error4 text-danger"></div>
                      </div>
                    </div>
                    <div class="">
                      <textarea  name="address1"  id="address1" class="form-control p-2 mb-2" placeholder="address" required></textarea>
                      <div class="error5 text-danger"></div>
                    </div>
                    <div class="error text-danger"></div>
                  </div>
                  <div class="fb">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                      </div>
                    </div>
                  </div>
                </div> -->
               <!--  <div class="row">
                  <div class="col-md-2 col-lg-2">
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <span class="fr">Farmer&nbsp&nbsp</span><input type="radio" name="rdb"  id="farmer" checked="1">
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <span class="by">Buyer  &nbsp</span><input type="radio" class="" name="rdb"  id="buyer" >
                  </div>
                </div> -->
                <!-- Modal footer -->
                <div class="modal-footer">
                  <!-- <button type="button" id="button1" name="login" class="btn btn-success button1">Submit1</button> -->
                  <button type="button" id="button2" name="login" class="btn btn-warning button2">Register</button>
                  <button type="button" class="btn btn-danger d-inline" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section>
          <div id="home" class="caraouselbg">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              <div class="carousel-inner">
                <div class="carousel-item active" id="demo" >
                  <img src="img/agri.webp" class="img02" alt="Los Angeles"  style="object-fit: cover" width="1500px" height="720px" >
                  <div class="carousel-caption">
                    <h1 class="font-weight-bold" style="font-size: 4em;">AgroCart</h1>
                    <p style="font-size: 2em;">Now Made its Easier</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/pesticides.jpg" alt="Chicago" style="object-fit: cover" width="1500px" height="720px" >
                  <div class="carousel-caption">
                    <h1 class="font-weight-bold"style="font-size: 4em;">Pesticides</h1>
                    <p style="font-size: 2em;">The Pesticide That Help to Grow</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/tract.jpg" alt="New York" style="object-fit: cover" width="1500px" height="720px">
                  <div class="carousel-caption">
                    <h1 class="font-weight-bold"style="font-size: 4em;">AgroCart</h1>
                    <p style="font-size: 2em;">Brings Million of Smiles</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
        </section>


</div>
</div>



        <!-- --------------------------services-------------------------------- -->
        
        <section>
          <div class="container">
            <div class="service  mt-3" id="service">
              <div class="serviceheader">
                <h1>Services</h1>
                <p>Service That help To Grow More</p>
              </div>
              <div class="servicebody">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-12 mb-3 ">
                    <div class="containers">
                      
                      <div class="cards">
                        <div class="card-body">
                          <div class="content">
                            <h2><i class="fa fa-ticket"></i></h2>
                            <h3>Schemes</h3>
                            <p>The Ministries of the Government of India have come up with various government programs called schemes(Yojana) from time to time. </p>
                            
                            <a class="sb"href="#">Know More</a>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mb-3  ">
                    <div class="containers">
                      <div class="cards">
                        
                        <div class="card-body ">
                          <div class="content">
                            <h2><i class="fa fa-bug"></i></h2>
                            <h3>Add Machine</h3>
                            <p>Farmer can rent their machines  and they can choose valid rent price for particular time limit. </p>
                            
                            <a class="pb"href="#">Know More</a>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mb-3 ">
                    <div class="containers">
                      <div class="cards">
                        
                        <div class="card-body ">
                          <div class="content">
                            <h2><i class="fa fa-leaf"></i></h2>
                            <h3>Add Product</h3>
                            <p>Farmer can add their product and Choose price their own and also can buy the product easie on this </p>
                            
                            <a class="cb" href="addproduct.php">Know More</a>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mb-3 ">
                    <div class="containers">
                      <div class="cards">
                        
                        <div class="card-body">
                          <div class="content">
                            <h2><i class="fa fa-shopping-cart"></i></h2>
                            <h3>E-commerce</h3>
                            <p>E-commerce in agriculture new buisness model for smallholders, where farmers can sell thier products and can also buy other products </p>
                            <a class="eb"href="#">Know More</a>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mb-3 ">
                    <div class="containers">
                      <div class="cards">
                        <div class="card-body ">
                          <div class="content" id="machine">
                            <h2><i class="fa fa-gears"></i></h2>
                            <h3>Machinary</h3>
                            <p>Machinary that help for agriculture where farmer can book required machines for their from native places at best rental prices and also can add machines  </p>
                            
                            <a class="mb" href="#">Know More</a>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mb-3 ">
                    <div class="containers">
                      <div class="cards">
                        
                        <div class="card-body">
                          <div class="content">
                            <h2><i class="fa fa-mixcloud"></i></h2>
                            <h3>Weather</h3>
                            <p>Weather is the State of atmosphere,describing for example the degree to which it is hot or cold,wet or dry,calm etc. </p>
                            
                            <a class="wb" href="#">Know More</a>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </section>








    <section class="contactsection">
      <div class="contact">
      <div class="contactheader">
        <h2>Contact Us</h2>
        <p>Please Provide your Valuable feedback</p>
      </div>
      <div class="contactmain" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4">
                 <div class="formhead">
                 <h2>Chatbot</h2>
                    <p>Ask Me..!!</p>
                  </div>
                  <div class="contactform">
                  &nbsp;<iframe src='https://webchat.botframework.com/embed/pratiksha16-bot?s=IsnYXw4TiJM.LNxcKYCJstk4Ntg94u_KUv7dqtXc5ju8m8nOEU9XEZk'  style='min-width: 300px; width: 40%; min-height: 200px;'></iframe>
                  </div>
                  <br><br>
                    </div>
            
            <div class="col-lg-4 col-md-4" id="about">
                 <div class="addhead">
                  <h2 class="text-center">Address</h2>
                  </div>
              <div class="addr mt-4">
              <ul>
              <li class="one mb-2">Karad-415539</li>
                      <li class="two mb-2">Opp YC College</li>
                      <li class="three mb-2">Near Pharmacy College</li>
                      <li class="four mb-2">Government College of Engineering </li>
                      <li class="five">Karad</li>
            </ul>
            </div>
          
          </div>
            <div class="col-lg-4 col-md-4">
              <div class="container">
              <div class="map">
              <iframe align="center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3809.1241967109213!2d74.18502891470202!3d17.30955578812528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1826400000001%3A0x34bdd98ca25093e3!2sGovernment%20College%20of%20Engineering%2C%20Karad!5e0!3m2!1sen!2sin!4v1648230290627!5m2!1sen!2sin" width="530" height="350" frameborder="0" style="border:0; padding: 10px; box-shadow: 0 0 0px 1px #999;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
              </div>
            </div>
        </div>
      </div>   
      </div>
    </div>

    </section>



 

<section>
  <div class="footer">
   <div class="footertext">
     <span class="rights">© 2022 Agrocart Ltd. All rights reserved</span>
      <span class="design p-3 ml-5">© Designed Team Alpha</span>
      <div class="iconfooter mt-1">
  
        
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


    $('.sb').click(function(event) {

     location.replace("scheme.php");
      /* Act on the event */
    });

    $('.wb').click(function(event) {

     location.replace("weather.php");
      /* Act on the event */
    });

    $('.eb').click(function(event) {

     location.replace("ecom1.php");
      /* Act on the event */
    });

      $('.mb').click(function(event) {

     location.replace("machine.php");
      /* Act on the event */
    });
           $('.pb').click(function(event) {

     location.replace("addmachine.php");
      /* Act on the event */
    });






// ---------------------------------------------------------------------------




// =========================================================================================

var pat1=/^[a-zA-Z. ]*$/;
var pat2=/^[0-9]{10}$/;
var pat3=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,12}$/;
// var pat4=/^ [a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]$/;

$('.button1').click(function(event) {
  /* Act on the event */

var fname1=$('#fname1').val();
var lname1=$('#lname1').val();
var mobile1=$('#mobile1').val();
var address1=$('#address1').val();
var password1=$('#password1').val();

if (fname1=="" && lname1=="" && mobile1=="" && address1=="" && password1=="") {
  $('#fname1').addClass('is-invalid');
    $('#lname1').addClass('is-invalid');
    $('#mobile1').addClass('is-invalid');
    $('#address1').addClass('is-invalid');
    $('#password1').addClass('is-invalid');

    $('.error').html('Please fill the all the fields');
}else{
   $('.error').html('');


if (fname1=="") {

 $('#fname1').addClass('is-invalid');
 $('.error1').html('Enter First Name');

}else{

  if (!pat1.test(fname1)) {

      $('#fname1').addClass('is-invalid');
       $('.error1').html('enter char only');

  }
   else{
    $('#fname1').removeClass('is-invalid');
      $('.error1').html('');
  }
}


if (lname1=="") {

 $('#lname1').addClass('is-invalid');
  $('.error2').html('Enter Last name');

}else{

  if (!pat1.test(lname1)) {

      $('#lname1').addClass('is-invalid');
       $('.error2').html('enter char only');

  }
   else{
    $('#lname1').removeClass('is-invalid');
      $('.error2').html('');
  }
}


if (mobile1=="") {

 $('#mobile1').addClass('is-invalid');
   $('.error3').html('Enter  mobile number');

}else{

  if (!pat2.test(mobile1)) {

      $('#mobile1').addClass('is-invalid');
       $('.error3').html('Enter valid mobile number');

  }
   else{
    $('#mobile1').removeClass('is-invalid');
      $('.error3').html('');
  }
}
   

if ((address1=="")) {
     $('#address1').addClass('is-invalid');
       $('.error4').html('please fill field');
}

else{
   $('#address1').removeClass('is-invalid');
      $('.error4').html('');
}

if (password1=="") {

 $('#password1').addClass('is-invalid');
      $('.error4').html('Enter Password');

}else{

  if (!pat3.test(password1)) {

      $('#password1').addClass('is-invalid');
       $('.error4').html('Enter valid Password');

  }
   else{
    $('#password1').removeClass('is-invalid');
      $('.error4').html('');
  }
}

$.ajax({





});






}

});





// =========================================================================================

var pat1=/^[a-zA-Z. ]*$/;
var pat2=/^[0-9]{10}$/;
var pat3=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,12}$/;
var pat4=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-.]+$/;

$('.button2').click(function(event) {
  /* Act on the event */

var fname=$('#fname').val();
var lname=$('#lname').val();
var mobile=$('#mobile').val();
var email=$('#email').val();
var password=$('#password').val();
var address=$('#address').val();

if (fname=="" && lname=="" && mobile=="" && email=="" && password=="" && address=="" ) {
  $('#fname').addClass('is-invalid');
    $('#lname').addClass('is-invalid');
    $('#mobile').addClass('is-invalid');
     $('#email').addClass('is-invalid');
    $('#password').addClass('is-invalid');
  $('#address').addClass('is-invalid');

    $('.error').html('Please fill the all the fields');
}else{
   $('.error').html('');

   if (fname=="") {
    $('.fname').addClass('is-invalid');
    $('.error11').html('Please enter  first name');
   }else{
      $('.error11').html("enter valid name");
    if (!pat1.test(fname)) {
    }else{
      $('.fname').removeClass('is-invalid');
      $('.error11').html('');
    }
   }


   if (lname=="") {
    $('.lname').addClass('is-invalid');
    $('.error12').html('Please enter last name');
   }else{
    if (!pat1.test(lname)) {
      $('.error12').html("enter valid name");
    }else{
      $('.lname').removeClass('is-invalid');
      $('.error12').html('');
    }
   }

  if (mobile=="") {
    $('.mobile').addClass('is-invalid');
    $('.error13').html('Please enter mobile number');
   }else{
    if (!pat2.test(mobile)) {
      $('.error13').html("enter valid Mobile number");
    }else{
      $('.mobile').removeClass('is-invalid');
      $('.error13').html('');
    }
   }
 
  if (email=="") {
    $('.email').addClass('is-invalid');
    $('.error16').html('Please enter email ');
   }else{
    if (!pat4.test(email)) {
      $('.error14').html("enter valid email ");
    }else{
      $('.email').removeClass('is-invalid');
      $('.error14').html('');
    }
   }
  //  if (password=="") {
  //   $('.password').addClass('is-invalid');
  //   $('.error15').html('Please enter password');
  //  }else{
  //   if (!pat3.test(password)) {
  //     $('.error15').html("enter valid password ");
  //   }else{
  //     $('.password').removeClass('is-invalid');
  //     $('.error15').html('');
  //   }
  //  }
if (address=="") {
     $('#address').addClass('is-invalid');
       $('.error16').html('please fill field');
}

else{
   $('#address').removeClass('is-invalid');
      $('.error16').html('');
}
 


$.ajax({

  url:"user_registration.php",
  type:'POST',
  data:{
    login:1,
    fname:fname,
    lname:lname,
    mobile:mobile,
    email:email,
    password:password,
    address:address
  },
  success:function(data){

    if (data==1) {
      alert("already exists");
    }
    if(data==2){
      alert("inserted");
    }
    if(data==3){
      alert("not inserted");
  }
}

});







}

});









  });



</script>