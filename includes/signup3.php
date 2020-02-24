<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include("configuration.php");
    session_start();
      // username and password sent from form 
      if(isset($_POST['check']))
      {
        $error = "";
        echo "assa";
        $table = "login";
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

            if(!isset($username) || trim($username) == '')
        {
            $error = "please enter your username ";
        }
        if(!isset($password) || trim($password) == '')
        {
            $error = $error."please enter your password";
        }
       
        if(empty($error))
        {
            
            $sql = "INSERT INTO $table (username,password) VALUES('$username','$password')";
            $result = mysqli_query($db,$sql) or die(mysqli_error($db));
            if($result)
            {
                
                $_SESSION['id'] = $username;
                header("Location: home.php");
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
        <div class="full-3">
                <form id="form3" method="POST">
                    <div id="text" style="color:rgb(0, 0, 0)">JUST DONE</div>
                    
                    <div id="etext">
                        <input type="text" name="username" placeholder="New Username"> <br>
                    </div>
                    <div id="pass">
                      <input type="password" name="password" placeholder="New Password"> <br>
                    </div>
                    <div id="rem">
                        <input type="checkbox" id="check" placeholder="REMEMBER ME">
                        <span for="checkbox" style="color:rgb(0, 0, 0)">REMEMBER ME</label>         
                    </div>
                    <button name="check" id="login">FINISH</button>
                </form>
        </div>
        <script >
            <?php
                if(!empty($error))
                {
                    echo "alert('$error');";
                }
            ?>
        </script>
    </body>
</html>