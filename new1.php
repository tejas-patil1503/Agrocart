<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>book</title>
  <?php include "assets/csslink.php"?>
  <link rel="stylesheet" href="">
</head>
<body>
  

  <?php

  include "upload.php";


  $q="Select * from ecom where id=$_GET[id] ";
  $sql=mysqli_query($con,$q);

  while($res=mysqli_fetch_array($sql)){

  ?>

<div>
  <a href="new1.php?id=<?php echo $res['id'] ?>"> <div class="card" height="200px;">
                  <img class="card-img-top" src="<?php echo $res['image']?>" width="400px" height="200px" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $res['mtxt'] ?></h4>
                    <p class="card-text"><?php echo $res['descr']?></p>
                    <p class="card-text"><span class="text-info font-weight-bold">Price</span>:<span class="text-success font-weight-bold"><?php echo $res['price']?>  Rs</span></p>
                  <a href="new1.php?id=<?php echo $res['id'];?>">Add Product</a>
                  </div>
                </div>
</div>

<?php

  }

  ?>

  <?php include "assets/jslink.php"?>
</body>
</html>