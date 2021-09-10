<?php 
session_start();
if($_SESSION["phone"]!=''){
 $ph = $_SESSION["phone"];


$link=new mysqli("localhost","root","","ajaxcrud");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Answer</title>
</head>
<body>
	
	<div class="container">
		<div class="col-sm-12">
			<br>
      <a href="dashboard.php" class="btn btn-primary" role="button">Back</a>
      <br>
			
		</div>
		<div class="col-sm-12">
			<h3 align="center"><b>Answer</b></h3>

      <form action="answer_sub.php" method="POST">

			<table class="table" border="2">
    <thead>
     <!--  <tr>
      	<th>ID</th>
        <th></th>
        
      </tr> -->
    </thead>
    <tbody>
      <?php
      $num=1;
      $sql_gg=$link->query("SELECT * FROM `ask_ques` WHERE `phone`!= '$ph'");
     while ($out= @mysqli_fetch_assoc($sql_gg)) {
     	?>
     	<tr class="active">
     	<td><b><?php echo $num; ?></b></td>
        <td><?php echo $out['question']; ?><br><br>
          <input type="hidden" name="id_no[<?php echo $out['id']; ?>]">
          <div class="col-75">
        <textarea id="ans" name="ans[<?php echo $out['id']; ?>]" value=""  rows="3"  placeholder="Write something.." style="width:100%"></textarea>
      </div>
          </td>
        
      </tr>
      
      <?php
      $num++;
     }




      ?>

      
    </tbody>
  </table>
      <button type="submit" name="sub" class="btn btn-success">Submit</button>
</form>


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