<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include_once('includes/connection.php');

    if(isset($_GET['id']))
    {
        $id = mysqli_real_escape_string($db,$_GET['id']);
        $data = "SELECT * FROM blogs WHERE blog_id='$id' ";
        $result = mysqli_query($db,$data);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
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

    <title>Blogs</title>
  </head>
  <body>
    <div class="topnav">
            <span>TRAVEL HUB</span>
        </div>

    <div class="circle">

    </div>
    <div class="full2 container">
        <h1 class="title"><?php echo $row['title']; ?></h1>
        
        <p class="fir"><span class="date"><?php echo date('l jS',$row['date']); ?></span><span style="color:black; font-size:1.3em;padding-left:20px;"> by </span><span class="name"><?php echo $row['author']; ?></span></p>

        <div class="blog_img col-md-11">
            <img id="pho" src="images/london1.jpg" alt="">
        </div>

        <p class="con"><?php echo $row['content']; ?></p>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
