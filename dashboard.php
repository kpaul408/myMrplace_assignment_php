<?php 
session_start();

if($_SESSION["phone"]!=''){

$link=new mysqli("localhost","root","","ajaxcrud");
$ph=$_SESSION["phone"];

$sql_g=$link->query("SELECT * FROM `ajaxinsert` WHERE `phone`='$ph'");
while ($outt= @mysqli_fetch_assoc($sql_g)) {
  $name=$outt['name'];

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Dashboard</title>
</head>
<body>
	
	<div class="container">
    <div class="col-sm-12">
		<div class="col-sm-10">
			<br>

      <?php 
        echo "Welcome ". $name;?> <br><br>
      <!------------- Ask Question page --------------->

			<a href="ask_question.php" class="btn btn-primary" role="button">Ask Question</a>

      <!-------------- Answer Page ----------------->

      <a href="answer.php" class="btn btn-primary" role="button">Answer</a>
		</div>
    <div class="col-sm-2">
      <br>
          <a href="logout.php" class="btn btn-danger" role="button">logout</a>
    </div>
    </div>

		<div class="col-sm-12">
			<h3 align="center"><b>All Question</b></h3>

      <!-------------- Question table start ------------------>

			<table class="table" border="2">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Question</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $num=1;
      $sql_gg=$link->query("SELECT `question` FROM `ask_ques`");
     while ($out= @mysqli_fetch_assoc($sql_gg)) {               // fatch data
     	?>
     	<tr class="active">
     	<td><b><?php echo $num; ?></b></td>
        <td><?php echo $out['question']; ?></td>
        
      </tr>

      <?php
      $num++;
     }



      ?>
      
    </tbody>
  </table>
  <!-------------- Question table start ------------------>


		</div>
	</div>

</body>
</html>
<?php
}
else{
  ?>
  <script>
  window.location='login.php';
  
</script>

<?php
}

  ?>