<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  
    include_once('includes/connection.php');
    include_once('includes/article.php');
  
    $sql = "SELECT * FROM blogs ORDER BY blog_id DESC LIMIT 3";
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
        
         <!-- css of the page -->
        <link rel="stylesheet" href="web.css">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Didact+Gothic|Fredoka+One|Great+Vibes|Libre+Baskerville|Lobster+Two|Playfair+Display|Righteous|Zilla+Slab&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Homepage</title>

    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        
        
        <!-- --------------------------------------------------------------------------
            top secion of the page -->
        
        <div id="top-section">
            <div class="title">TRAVEL HUB <img src="icons/compass-2.png"></div>
            <div class="landing-img" id="img1">
                <div class="landing-text">
                    <p class="heading">EXPLORE THE WORLD</p>
                    <button class="btn btn1">GET IN TOUCH</button>
                </div>
            </div>
            
            <div class="landing-img" id="img2">
               
            </div>
           
            <div class="landing-img" id="img3">
              
            </div>
            
            <div id="dots-cont">
                <button class="dot active focus" id="dot1"></button>
               <button class="dot" id="dot2"></button>
                <button class="dot" id="dot3"></button>
            </div>
            <a href="#details"><div class="more"><p style="z-index:2">EXPLORE MORE &#8595;</p></div></a>
        </div>


        <!-- --------------------------------------------------------------------------
            side nav -->
       <i style="font-size:40px" class="indicator fa"><span id="asa">&#xf100;</span><span id="asd">&#xf101;</span></i>
        
       <div id="sidenav">
            <ul>
                <li class="side-ele"><a href="about_page.php" class="ref">about us</a></li>
                <li class="side-ele"><a href="contact_form.php" class="ref">contact us</a></li>
                <li class="side-ele"><a href="blogs.php" class="ref">Blogs</a></li>
                <a href="admin_panel.php" class="ref"><button class="admin-btn">Admin Panel   &#8594;</button>
                </a>
            </ul>
        </div>
        
        
        
         <!-- --------------------------------------------------------------------------
            about section of the page -->
        
        <div id="details">
            <p class="heads">WHY CHOOSE US</p>
            <div class="container">
                <div class="row">
                    <div class="items col-md-3">
                        <div class="icon-cont">
                            <img src="icons/video-recorder.png" alt="">
                        </div>
                        <span>asasdas</span>
                        <div class="item-text">
                            <div class="under"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                    <div class="items col-md-3">
                        <div class="icon-cont">
                            <img src="icons/audio.png" alt="">
                        </div>
                        <span>asasdas</span>
                        <div class="item-text">
                            <div class="under"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                    <div class="items col-md-3">
                        <div class="icon-cont">
                            <img src="icons/flight.png" alt="">
                        </div>
                        <span>asasdas</span>
                        <div class="item-text">
                            <div class="under"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                    <div class="items col-md-3">
                        <div class="icon-cont">
                            <img src="icons/truck.png" alt="">
                        </div>
                        <span>asasdas</span>
                        <div class="item-text">
                            <div class="under"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="about_page.php"><div class="btn btn1 about-btn">MORE ABOUT US &#8594;</div></a>
        </div>

        
        
         <!-- --------------------------------------------------------------------------
            packages carousel of the page -->
       
        <div class="things">
            <div class="packs-head">
                <p>MOST POPULAR PACKAGES </p></div>
            <div class="container">
                <div id="packs-carousel" class="carousel slide" data-ride="carousel">
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img d-block w-100" src="images/caro1.jpg" alt="First slide">
                            <div class="triangle-1">
                                <div class="tri-cont">
                                    <div class="cor-head">asdasdds</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <div class="pack-btn-in">BUY A PACK</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img d-block w-100" src="images/caro2.jpg" alt="Second slide">
                            <div class="triangle-2">
                                <div class="tri-contd">
                                    <div class="cor-head">asdasdds</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <div class="pack-btn-in">BUY A PACK</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img d-block w-100" src="images/caro3.jpg" alt="Third slide">
                            <div class="triangle-2">
                                <div class="tri-contd">
                                    <div class="cor-head">asdasdds</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <div class="pack-btn-in">BUY A PACK</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img d-block w-100" src="images/caro4.jpg" alt="Fourth slide">
                            <div class="triangle-2">
                                <div class="tri-contd">
                                    <div class="cor-head">asdasdds</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <div class="pack-btn-in">BUY A PACK</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img d-block w-100" src="images/caro5.jpg" alt="Fifth slide">
                            <div class="triangle-1">
                                <div class="tri-cont">
                                    <div class="cor-head">asdasdds</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <div class="pack-btn-in">BUY A PACK </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#packs-carousel" class="ok" data-slide-to="0" class="active"></li>
                        <li data-target="#packs-carousel" class="ok" data-slide-to="1"></li>
                        <li data-target="#packs-carousel" class="ok" data-slide-to="2"></li>
                        <li data-target="#packs-carousel" class="ok" data-slide-to="3"></li>
                        <li data-target="#packs-carousel" class="ok" data-slide-to="4"></li>
                    </ol>
                </div>
             
            </div>
        </div>


         <!-- --------------------------------------------------------------------------
            comment of the page -->

        <div class="comment">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="person-img col-md-2"></div>
                    <div class="texts col-md-9">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                        <span>asdasdd asdasda</span>
                    </div>
                </div>
            </div>
            
        </div>
        
        
         <!-- --------------------------------------------------------------------------
           recent blogs  -->

        <div class="blog-cont">
            <div class="blog-head">RECENT BLOGS</div>

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
            <a href="blogs.php"><div class="btn btn1 pack-btn">SEE ALL &#8594;</div></a>
        </div>


         <!-- --------------------------------------------------------------------------
            footer of the page -->

        <footer>
        <a href="contact_form.php"><div id="contact">CONTACT US &#8594;</div></a>
        
            <div class="row">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1AZkIeTyYs-Mt7hNOJlydLJIKr7gUWnIr" class="col-md-5" frameborder="none"></iframe>
                <div class="right col-md-6" >
                    <div class="contact-details">
                        <ul class="con">
                            <li>contact no. 7987605625</li>
                            <li>email address. adi.shrivastava2905@gmail.com</li>
                            <li>outlook address. adityashri29@outlook.com</li>
                        </ul>
                        <div class="socialicon-cont">
                            <img src="icons/facebookicon.png" alt="">
                            <img src="icons/linkedinicon.png" alt="">
                            <img src="icons/twittericon.png" alt="">
                            <img src="icons/instagramicon.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
        
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script type="text/JavaScript" src="index.js"></script>
        
    </body>
</html>
