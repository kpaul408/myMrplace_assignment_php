<?php
$link=new mysqli("localhost","root","","ajaxcrud");

 if (isset($_POST['sub'])) {
 	extract($_POST);
 	
 	if ($pwd==$cpwd) {

 		$mat= $link->query("SELECT `phone` from `ajaxinsert` WHERE `phone`='$phone'");
 		$count=@mysqli_num_rows($mat);
		//$outt=@mysqli_fetch_assoc($count);

 		if($count>0){
 			?>
 		<script>
 			alert("Already register, Please Login");
 			document.location = 'login.php'; 

 		</script>

 		<?php
 			
 		}
 		else{
            

            $pw= hash('sha256', $pwd);

 			$out=$link->query("INSERT INTO `ajaxinsert` (`name`,`phone`,`email`,`pwd`) VALUES ('$name','$phone','$email','$pw') ");
 		if($out){
 			?>
            <script>
                alert("Success");
                window.location="login.php";
            </script>

            <?php
 		}
 		else{
 			?>
            <script>
                alert("Error!");
                window.location="index.php";
            </script>

            <?php
 		}
 		}
 		
 	}
 	else{
 		?>
 		<script>
 			alert("Password and Confirm Password not match!!");
 			document.location = 'index.php'; 

 		</script>

 		<?php

 	}
 }

?>