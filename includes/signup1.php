<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include("configuration.php");
    session_start();
   
      // username and password sent from form 
      if(isset($_POST['create']))
      {
          $error = "";
        $table = "signup";
        $name12 = mysqli_real_escape_string($db,$_POST['names1']);
            $email = mysqli_real_escape_string($db,$_POST['emails']);
            $mobile = $_POST['mobiles'];
            if(!isset($name12) || trim($name12) == '')
        {
            $error = "please enter your name ";
        }
        if(!isset($email) || trim($email) == '')
        {
            $error = $error."please enter your email address";
        }
        if(!isset($mobile) || trim($mobile) == '')
        {
            $error = $error."please enter your mobile number";
        }
        if(empty($error))
        {
            
            $sql = "INSERT INTO $table (name,email,mobile) VALUES('$name12','$email','$mobile')";
            $result = mysqli_query($db,$sql) or die(mysqli_error($db));
            if($result)
                {
                    header("Location: signup3.php");
                }
        }
      }

?>

<html>
    <head>
        <title>signup page</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML,CSS">
        <meta name="author" content="Aditya Shrivastava">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro|Comfortaa|Cookie|Dosis|Great+Vibes|Noto+Serif+SC|Playfair+Display:400,800|Raleway|Righteous|Uncial+Antiqua&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div class="full">
            
                <form method="POST">
                    <div id="text">JOIN US</div>
                    
                    <div id="etext">
                        <input type="text" name="names1" placeholder="Name"> <br>
                    </div>
                    <div id="pass">
                      <input type="text" name="emails"  placeholder="Email Address"> <br>
                    </div>
                    <div id="pass">
                        <input type="number" name="mobiles" placeholder="Mobile no."> <br>
                    </div>
                    <button name="create" id="login"><a href="">NEXT</a></button>
                
                    <div id="down">
                        <span id="center"><a href="login.php" style="color:rgb(7, 5, 12);">Already have an account?</a></span>
                    </div>
                </form>
        </div>
        <script >
            <?php
                if(!empty($error))
                {
                    echo "alert('$error;');";
                }
            ?>
        </script>
    </body>
</html>