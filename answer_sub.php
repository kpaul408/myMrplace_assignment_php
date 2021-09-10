<?php 
session_start();

$link=new mysqli("localhost","root","","ajaxcrud");

 $ph = $_SESSION["phone"];

extract($_POST);
if(isset($sub)){

	echo $ph."<br>";
	//print_r($id_no);
	//echo "<br>";
	//print_r($ans);
	// echo count($ans);
	// echo count($id_no);

	 foreach ($ans as $key => $value) {
	
			 $out=$link->query("INSERT INTO `answer`(`qus_id_no`,`ans`,`phone`) VALUES ('$key','$value','$ph')");
		
	}
	if($out){
				?>
			 	<script>
			 	alert("Answer Submit successfully.");
			 	window.location="dashboard.php";
			 	</script>

			 	<?php

			}
	else{
			?>
			 <script>
			 alert("Aerror!! .");
			 window.location="answer.php";
			 </script>
			<?php
		}

}


?>