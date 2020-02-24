<?php
   include('checking_session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <style>
         body
         {
            text-align:center;
         }
         h1
         {
            text-align:center;
            padding:10vh;
            color:#100011;
         }

         button
         {
            margin-top:0vh;
         }
         a
         {
            color:white;
            font-family:Helvetica;
            text-decoration:none;
         }
      </style>
   </head>
   
   <body>
      <h1 class="text-justify-center-danger">Congratulations <?php echo $ses; ?><br> you have successfully logged in!</h1> 
      <button class="btn btn-success"><a href = "logout.php">Sign Out</a></button>
   </body>
   
</html>