<?php
  $con=mysqli_connect("localhost","root","","ecom") or die("connection failed");

  $q="SELECT * FROM ecom ";
  $res=mysqli_query($con,$q);
  while ($result=mysqli_fetch_assoc($res)) {
    


  }

  ?>
