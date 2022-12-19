<?php require("db.php") ?>
<html>
    <head>
         <title>Admin Login Panel</title>
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
            <link rel="stylesheet" type="text/css" href="Admin.css">       
    </head>
    <body>

        <div class="container">
            <div class="myform">
                <form method="POST" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>">
                    <h2>ADMIN LOGIN</h2>
                    <input type="text" placeholder="Mobile" name="Mobile">
                    <input type="password" placeholder="Password" name="Password">
                    <button type="submit" name="Login">LOGIN</button>
                    <button type="submit" name="Register">Register</button>
                </form>
            </div>
            <div class="image">
                <img src="admin image.jfif" width="200" height="200">
                
            </div>
        </div>

     <?php 

      function input_filter($data)
      {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
      }
     

      if(isset($_POST['Login']))
      {
        // filtering data from above function
        $Mobile=input_filter($_POST['Mobile']);
        $Password=input_filter($_POST['Password']);
        
        # escaping special symbol used in sql statment
        $Mobile=mysqli_real_escape_string($con,$Mobile);
        $Password=mysqli_real_escape_string($con,$Password);

        #query template

        $query="SELECT * FROM `ecomlogin` WHERE `mobile`=? AND `password`=?";

        #prepared statement

        if($stmt=mysqli_prepare($con,$query))
        {
            mysqli_stmt_bind_param($stmt,"ss",$Mobile,$Password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt)==1)
            {
               session_start();
               $_SESSION['AdminLoginId']=$Mobile;
               header("location: Admin panel.php");
            }
            else
            {
                echo"<script>alert('Invalid Admin Name or Password');</script>";

            }
            mysqli_stmt_close($stmt);
        }
        else
        {
            echo"<script>alert('SQL query is not Prepared');</script>";

        }

      }
     
     
     ?>
    </body>
</html>