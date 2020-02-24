<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once('includes/connection.php');

    session_start();
   
      // username and password sent from form 
      if(isset($_POST['submit']))
      {
        $error = "";
        $table = "contacts";
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $number = $_POST['number'];
        $message = mysqli_real_escape_string($db,$_POST['message']);
        $date = time();
 
        if(!isset($name) || trim($name) == '')
        {
            $error = "please enter your name ";
        }
        if(!isset($email) || trim($email) == '')
        {
            $error = $error."please enter your email address";
        }
        if(!isset($number) || trim($number) == '')
        {
            $error = $error."please enter your mobile number";
        }
        if(!isset($message) || trim($message) == '')
        {
            $error = $error."please enter your mobile number";
        }
        if(empty($error))
        {
            $sql = "INSERT INTO $table (name,email,number,message) VALUES('$name','$email','$number','$message')";
            $result = mysqli_query($db,$sql) or die(mysqli_error($db));
            if($result)
                {
                    echo "success";
                }
        }
      }

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Didact+Gothic|Fredoka+One|Great+Vibes|Libre+Baskerville|Lobster+Two|Playfair+Display|Righteous|Zilla+Slab&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" href="admin.css">

    <title>Admin panel</title>
  </head>
  <body>

  <div class="topnav">
            <span>TRAVEL HUB</span>
        </div>

        <div class="circle">

        </div>

    <form class="add_new container" action="" method="POST">

        <p id="new">CONTACT US</p>
        
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Name</label><input type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-6">
            <label for="email">Email Address</label><input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="number">Number</label><input type="text" class="form-control" name="number">
        </div>
        <div class="form-group">
            <label for="message">Message</label><textarea name="message" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">SEND</button>
       
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="admin.js"></script>
  </body>

</html>
