 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DigiMarket</title>
    <?php include "assets/csslink.php"?>
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background:white">


 
 <?php
include "upload.php";
$connect=mysqli_connect("localhost","root","","ecom");

if (isset($_POST['quantity'])) {
  include "upload.php";

$quantity=$_POST['quantity'];

$sel="SELECT * FROM ecom ";
$selc=mysqli_query($connect,$sel);
while($r=mysqli_fetch_assoc($selc)){

$qt1= $r['qty'];



$q3="UPDATE  ecom set qty=$quantity where id='$_GET[id]'";
      $res3=mysqli_query($connect,$q3);
  if ($res3) {
         # code...
?>
<script type="text/javascript">
 
</script>

<?php

   


}
}
}
         ?>

                                
                  <?php
                  $connect=mysqli_connect("localhost","root","","ecom");

                    $qury = "SELECT * FROM ecom ";
                    $result = mysqli_query($connect,$qury);
                    if(mysqli_num_rows($result) >0)
                    {
                      while($row = mysqli_fetch_array($result))
                      {

                  ?>
                   
         <table class="table table-bordered table-striped text-center">
         <thead class="thead">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">image</th>
          <th scope="col">product</th>
          <th scope="col">Category</th>
          <th scope="col">price</th>
          <th scope="col">Updated stock</th>
      
          <th scope="col">operatios</th>

         
        </tr>
      </thead>
      <tbody>
                          <div class="">
                                    
                            <form method="post" action="stock.php?action=add&id=<?php echo $row['id'];?>">  
                       

                                <tr>
                           <td><?php echo $row['id'];?> </td>
                         
                              <td> <?php echo $row['mtxt'];?></td>
                              <td> <?php  echo $row['qty'];?> </td>
                                      <td><?php echo $row['cat']?></span></td>
                            <!-- <p class="card-text"><span class="text-info font-weight-bold">Description:-</span><span class="text-success "><?php echo $row['descr']?></span></p>  -->
                            
                            <td><?php echo $row['price'];?></td>
                            <td>   <input type="number" name="quantity" class=" rqty" value="1" datamask="0000" placeholder="Quantity" /></td>
                            </div>
                          </div>
                            <input type="hidden" name="hidden_mtxt" value="<?php echo $row['mtxt'] ?>" />
                           <input type="hidden" name="hidden_image" value="<?php echo $row['image'];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">
                             <td>  <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success addcart" value="Update Stock" /></td>
                            </tr>
                             </table>
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
  </tbody>
          </body>
          </html>