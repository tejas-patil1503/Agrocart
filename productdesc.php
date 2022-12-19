<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Desc</title>
	<?php include "assets/csslink.php"?>
	<?php include "assets/jslink.php"?>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		                
                  <?php
                  $connect=mysqli_connect("localhost","root","","ecom");

                    $qury = "SELECT * FROM ecom  where id=$_GET[id]";
                    $result = mysqli_query($connect,$qury);
                  
                      while($row = mysqli_fetch_array($result))
                      {

                  ?>
                  <div class="descbgtxt">Product Details</div>
           <div class="descbg"></div>
  <div class="col-lg-3 p-3 imgdet">

                          <div class="card">
                                    

                            <img class="card-img-top imgthumb" src="<?php echo $row['image']?>" width="400px" height="300px" alt="Card image"></div>
	</div>
    
                          <div class="col-lg-6 ">          
                              <div class="card-body productdet">
                                <ul>

                                       <form method="post" action="productdesc.php?action=add&id=<?php echo $row['id'];?>"> 
                             <li><span class="text-info font-weight-bold nametxt">Product Name: <span class=" nametitle text-info mb-5"><?php echo $row['mtxt'];?></span></span> </li><br>
                              <li>  <p class="text-info aqtytxt qty"><span class="font-weight-bold">Available Qty:<span class="aqty text-success qtymsg font-weight-bold"><?php  echo $row['qty'];?></span></span></p> </li><br>
                              <li> <p class="card-text"><span class="cattext text-info font-weight-bold">Category:-</span><span class="text-success mb-3 font-weight-bold catdet"><?php echo $row['cat']?></span></p></li><br>
                   <li> <p class="card-text"><span class="desctxt text-info font-weight-bold">Description:-</span><span class="desctitle text-success "><?php echo $row['descr']?></span></p> </li><br>
                            <li>   <h5 class="">Price:<span class="text-danger">Rs</span><span style="font-size: 0.8em;" >/</span><span style="font-size: 0.8em;" class="text-warning"><?php echo $row['unit'];?>    </span><span class="text-success"><?php echo $row['price'];?></span></h5>  </li>
                           <div class="row">
                            <div class="col-lg-6">
                            
                            </div>
                            
                          </div>
                        </form>
                           </ul>
                              
                          </div>  
               
                </div>  
		<?php
}
		?>
	

      
</body>
</html>