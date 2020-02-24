<?php

   include("configuration.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $error = "";
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE username='$username' and password='$password' limit 1";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  
		$num = mysqli_num_rows($result);
      
		  // If result matched $myusername and $mypassword, table row must be 1 row
			
		  if($num == 1) {
			 $_SESSION['id'] = $username;
			 
			header("location: home.php");
		  }else {
			 $error = "Please enter the correct username and password";
		  }
   } 

?>

<html>
    <head>
        <title>login page</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML,CSS">
        <meta name="author" content="Aditya shrivastava">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro|Comfortaa|Cookie|Dosis|Great+Vibes|Noto+Serif+SC|Playfair+Display:400,800|Raleway|Righteous|Uncial+Antiqua&display=swap" rel="stylesheet">
        <style type="text/css"><?php include("login.css"); ?></style>
    </head>
    <body>
        <div class="full">
            <div class="overlay"></div>
                <form method="POST">
                    <div id="text">WELCOME</div>
                    
                    <div id="etext">
                        <input type="text" name="username" placeholder="Username"> <br>
                    </div>
                    <div id="pass">
                      <input type="password" name="password" placeholder="Password"> <br>
                    </div>
                    <div id="rem">
                        <input type="checkbox" id="check" placeholder="REMEMBER ME">
                        <span for="checkbox">REMEMBER ME</label>         
                    </div>
                    <button id="login">LOGIN</button>
                   
                    <div id="down">
                        <span id="left"><a href="#">Forgot password</a></span>
                        <span id="right"><a href="signup1.php">Create account</a></span>
                    </div>
                    <div id="socials">
                        <div id="or">OR <br></div>
                        <button id="facebook">SIGNIN  WITH  FACEBOOK</button>
                        <button id="google">SIGNIN  WITH  GOOGLE</button>
                    </div>
                </form>
        </div>
        <script >
            <?php
                if(!empty($error))
                {
                    echo "alert('Please enter the correct username and password');";
                }
            ?>
        </script>
    </body>
</html>