<?php session_start();
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   include_once('includes/connection.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

    $error = "";
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      // username and password sent from form 
        if(!isset($myusername) || trim($myusername) == '')
        {
            $error = "please enter your name.<br>";
        }
        if(!isset($mypassword) || trim($mypassword) == '')
        {
            $error = $error."please enter your email address.<br>";
        }
        if(empty($error))
        {
           
            $sql = "SELECT id FROM login_table WHERE username='$myusername' AND password ='$mypassword' ";
            $result = mysqli_query($db,$sql);
            
            if($result)
            {
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                
                $count = mysqli_num_rows($result);
                
                if($count == 1) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login_user'] = $myusername;
                    header("location: admin_panel.php");
                }else {
                    $error = "Your Login Name or Password is invalid";
                }
            }
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
        <link rel="stylesheet" href="login.css">
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
                </form>
                
            </div>
            <div class="mess" style="position: absolute;
                bottom: 5vh;
                left:10%;
                padding:2vw;
                width:80%;
                display:<?php if(empty($error)){echo "none";} else{echo "block";} ?>;
                text-align:center;
                background-color: brown;
                font-size: 2em;">
                <?php if(!empty($error)) { ?>
                    <?php echo $error; ?>
                <?php } ?>
            </div>
        </div>
        <script type="text/JavaScript">
        
        </script>
    </body>
</html>
