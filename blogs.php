<?php

  include('checking_session.php');

  include_once('includes/connection.php');

    if(isset($_POST['datebtn']))
    {
        $sql = "SELECT * FROM blogs ORDER BY date DESC";
       
    }
    
    else if(isset($_POST['popularbtn']))
    {
        $sql = "SELECT * FROM blogs ORDER BY title";
  
    }
    else
    {
         $sql = "SELECT * FROM blogs ORDER BY date DESC";
    }
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
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

    <link rel="stylesheet" href="web.css">
    <link rel="stylesheet" href="extra.CSS">
    
    <style>
            
.sort-div
    {
        background-color:transparent;
        font-size:1.5em;
        z-index:3333;
      
    }
    
.sort-div span
    {
        color:orange;
        font-weight:bold;
        padding-left:10px;
    }

    </style>
    
    <title>Blogs</title>
  </head>
  <body>
    
    <div class="topnav">
        <span>TRAVEL HUB</span>
    </div>


    <!-- ----------------------------------------------------------------------------
        circles of the page for design-->

    <div class="blog-circle1">
    </div>
    <div class="blog-circle2">
    </div>
    
  
    
    
    <!-- ----------------------------------------------------------------------------
        blogs of the page for design-->
        
    <div id="blog-full">
          
    
    <form type="submit" class="sort-div" method="POST">
        <span>SORT BY :</span>
        <button id="datebtn" class="btn btn-primary" name="datebtn">date</button>
        <button id="popularbtn" class="btn btn-primary" name="popularbtn">popular</button>
    </form>

        <p class="heads">SOME RECENT BLOGS</p>

      <div class="container">
        <div class="row">
          <?php foreach ($result as $r) { ?>
            <a href="blogpage.php?id=<?php echo $r['blog_id']; ?>" class="blogs col-md-4">
              <div class="cover">
                  <div class="blog-img">
                      
                  </div>

                  </div>
                  <div class="date"><?php echo date('l jS',$r['date']); ?></div>
                <div class="blog-body">
                    <div class="blog-title"><?php echo $r['title']; ?></div>
                    <p class="author-det">
                        <span><?php echo $r['author']; ?></span> <br>
                        <?php echo $r['details']; ?>
                    </p>
                </div>
          </a>
          <?php } ?>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
  
</html>
