<?php
session_start();
if($_SESSION["phone"]!=''){
?>

<html>  
      <head>  
           <title>Ask Question</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  <div><a href="dashboard.php" class="btn btn-primary" role="button">Back</a>
                <h2 align="center">Ask Question</h2> </div>

                    <!----------Start add question ---------->

                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><label for="cls">Type Question </label>
                                             <input type="text" required="" name="qus[]" class="form-control"><br></td> 
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
                <!----------End add question ---------->
           </div>  
      </body>  
 </html>  
 <script>  
     //////////// append function ///////////////

 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="qus[]" required="" class="form-control"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  

      //////////////// ajax part ///////////////

      $('#submit').click(function(){             
           $.ajax({  
                url:"action_page.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

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