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
        $table = "blogs";
        $name = mysqli_real_escape_string($db,$_POST['author_name']);
        $details = mysqli_real_escape_string($db,$_POST['author_details']);
        $title = mysqli_real_escape_string($db,$_POST['blog_title']);
        $content = mysqli_real_escape_string($db,$_POST['content']);
        $date = time();
 
        if(!isset($name) || trim($name) == '')
        {
            $error = "please enter your name ";
        }
        if(!isset($details) || trim($details) == '')
        {
            $error = $error."please enter your email address";
        }
        if(!isset($title) || trim($title) == '')
        {
            $error = $error."please enter your mobile number";
        }
        if(!isset($content) || trim($content) == '')
        {
            $error = $error."please enter your mobile number";
        }
        if(empty($error))
        {
            $sql = "INSERT INTO $table (author,details,title,content,date) VALUES('$name','$details','$title','$content','$date')";
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

    <link rel="stylesheet" href="admin.CSS">
    <link rel="stylesheet" href="extra.CSS">

    <title>Add Blog</title>
  </head>
  <body>
      
  <!--  top nav with title
    -->
    <div class="topnav">
            <span class="top-title">TRAVEL HUB</span>
        </div>

        <div class="circle">

        </div>
        
    
    <!-- form for adding new blog -->

    <form class="add_new container" action="" method="POST">

        <h1 id="new">NEW BLOG</h1>
        
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="author_name">Author name(Required)</label><input type="text" class="form-control" name="author_name">
            </div>
            <div class="form-group col-md-6">
            <label for="author_details">Author details</label><input type="text" class="form-control" name="author_details">
            </div>
        </div> 
        
        <div class="form-group">
            <label for="blog_title">Blog_title(Required)</label><input type="text" class="form-control" name="blog_title">
        </div>
        
        <div class="form-group">
            <label for="content">Content</label><textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">PUBLISH BLOG</button>
       
    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
