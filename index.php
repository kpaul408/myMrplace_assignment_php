<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Form</title>
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
  <h2>User Register form</h2>

<!----------- Form start---------->

  <form method="POST" action="reg.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" required="" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="phone">Phone No:</label>
      <input type="Number" class="form-control" required="" id="phone" placeholder="Enter Phone no" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" required="" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" required="" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" required="" id="cpwd" placeholder="Enter password" name="cpwd">
    </div>
    
    <button type="submit" name="sub" class="btn btn-success">Submit</button>
    <a href="login.php" class="btn btn-primary" role="button" aria-pressed="true">Click Here to Login</a>
    
  </form>

  <!------------ Form End ------------>
  <br><br>

</div>
<div class="col-sm-2"></div>
</div>

</body>
</html>
