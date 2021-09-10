<?php  
session_start();
$ph=$_SESSION["phone"];

 $link = mysqli_connect("localhost", "root", "", "ajaxcrud");  
 $number = $_POST["qus"]; 

 //print_r($number);


// array data insert;
          $a=0;
     foreach ($number as $key => $value) {
         $out=$link->query("INSERT INTO `ask_ques` (`question`,`phone`) VALUES ('$value','$ph') ");
         $a++;
     }
     if($out){
          echo $a." Question Insert Success.";
         }
         else{
          echo("Not Success");
         }

 ?> 
