<?php
session_start();

$link=new mysqli("localhost","root","","ajaxcrud");

if (isset($_POST['log_user'])) {
 	extract($_POST);

  $_SESSION["phone"]=$phone;
  $pw= hash('sha256', $pwd);

 	$sql= $link->query("SELECT `phone`,`pwd` from `ajaxinsert` WHERE `phone`='$phone' and `pwd`='$pw'");
 	$count=@mysqli_num_rows($sql);
 	if($count==1){
 		?>
 		<script>

 			alert("Login Success");

 			document.location = 'dashboard.php'; 

 		</script>

 		<?php
 		

 	}
 	else{
 		?>
 		<script>
 			alert("Phone no or Password not match!!");
 			document.location = 'login.php'; 

 		</script>

 		<?php 	}

 	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  <h2>User Login</h2>

  <!--------------- Login form Start ------------->

  <form method="POST">
    
    <div class="form-group">
      <label for="phone">Phone No:</label>
      <input type="Number" class="form-control" id="phone" placeholder="Enter Phone no" name="phone">
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
    
    <button type="submit" name="log_user" class="btn btn-success">Login</button>
    <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true">Click Here to User Register</a>
  </form>
  <!--------------- Login form end ------------->
</div>
<div class="col-sm-2"></div>
</div>

</body>
</html>