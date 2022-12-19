<?php
session_start();
if (!isset($_SESSION['mobile'])) {
  
header("location:index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>News</title>
	<?php include "assets/csslink.php"?>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="newsmain">
		<div>
			<h2 class="text-center  font-weight-bold  pt-4">News Admin</h2>
      <p class="text-center">Add Latest news Here </p>
			    <div class="btnproduct">
<button type="submit" class="btn btn-primary btnproduct" data-toggle="modal" data-target="#exampleModal">
 Add News
</button>
</div>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"  class="text-center" style="font-size: 2em ">Latest News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
    <form action="insertnews.php" id="myform" method="POST" accept-charset="utf-8">

  <textarea type="text" name="news" class="form-control p-3 mb-2 news" placeholder="Add Latest News" required ></textarea>
    <span class="error2"></span>
	
	<div class="modal-footer">
    
        <button type="submit" class="btn btn-primary submit" id="submit" name="add">Add News</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
	</form>
      </div>
      
    </div>
  </div>
</div>
		</div>
	</div>

	<?php include "assets/jslink.php"?>
</body>
</html>