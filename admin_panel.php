<?php

  include_once('checking_session.php');
 
  include_once('includes/connection.php');


  $sql = "SELECT * FROM blogs";
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

   
    <link rel="stylesheet" href="admin.CSS">

    <title>Admin panel</title>
  </head>
  <body>

    <!-- -------------------------------------------------------------------------------------------------------------
        left sidebar   -->
        
    <div class="sidebar">
      <div class="admin">
        ADMIN PANEL
      </div>
      <ul>
        <li class="b active">BLOGS</li>
        <li class="c">CONTACTS</li>
      </ul>  <button class="btn btn-success" style="display:block; margin:0 auto;margin-top:10vh;"><a href = "logout.php">Log Out</a></button>
    </div>


    <div class="topnav">
            <span class="links b active">blogs</span>
            <span class="links c">contacts</span>
            <span class="top-title">TRAVEL HUB</span>
        </div>

   
    <div class="full">
        
    <!-- -------------------------------------------------------------------------------------------------------------
        blogs   -->

      <div class="blog-section">
        <a href="add_blog.php"><button class="add-btn">
            ADD BLOG &#8594;
          </button></a>
          
          <div class="hr">

          </div>

          <div class="blogs container">
              <h2 class="isti">LIST OF BLOGS</h2>
              <ul>
                <?php foreach ($result as $r) { ?>
                  <a href="blogpage.php?id=<?php echo $r['blog_id']; ?>"><li>
                      
                          <span class="title-blog"><?php echo $r['title']; ?></span>
                      <br>
                      
                      - <small>
                      <?php echo date('l jS',$r['date']); ?>
                      </small>

                      <span>&#8594;</span>
                  </li>
                  </a>
                <?php } ?>
              </ul>
          </div> 
      </div> 
      
    <?php
      $sql = "SELECT * FROM contacts";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    ?>
    
    
    <!-- -------------------------------------------------------------------------------------------------------------
        contacts messages in atbel format for the  -->

          <div class="contact-section">
            <div class="container">
              <table style="width:100%">
                <tr>
                  <th>Name</th>
                  <th>email</th> 
                  <th>mobile no.</th>
                  <th>message</th>
                </tr>
                <?php foreach ($result as $r) { ?>
                <tr>
                  <td class="first"><?php echo $r['name'] ?></td>
                  <td class="sec"><?php echo $r['email'] ?></td>
                  <td class="thi"><?php echo $r['number'] ?></td>
                  <td class="fou"><?php echo $r['message'] ?></td>
                  <td class="fif"><a href="export.php?id=<?php echo $r['id'];?>"><button name class="btn btn-primary">message</button></a> </td>
                </tr>
                <?php } ?>
               
             
              </table>
            </div> 
            
          </div>
                                                                                                                                                              
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="admin.JS"></script>
    
    <script type="text/JavaScript">
        $( document ).ready(function() {
    

          var h = $(window).height()
        
            $(".c").on( "click",  function() {
        
                $('.contact-section').css("display","block");
                $('.blog-section').css("display","none");
                $('.c').css("color","rgb(70, 42, 207)");
                $('.b').css("color","white");
              });
        
            $(".b").on( "click",  function() {
              $('.contact-section').css("display","none");
              $('.blog-section').css("display","block");
              $('.b').css("color","rgb(70, 42, 207)");
              $('.c').css("color","white");
              });
              
        });
        
    </script>
    
  </body>
</html>
