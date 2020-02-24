<?php
    include_once("includes/connection.php");
    $id=$_GET['id'];
    require_once __DIR__ . '/vendor/autoload.php';

    $data1 = mysqli_real_escape_string($db,$_POST['data1']);
    $data2 = mysqli_real_escape_string($db,$_POST['data2']);
    $data3 = mysqli_real_escape_string($db,$_POST['data3']);
    $data4 = mysqli_real_escape_string($db,$_POST['data4']);

    $mpdf = new \Mpdf\Mpdf();

    $data = '';

    $data.= '<h1>Your Details</h1>';

    $data.= '<span>Name </span>' . $data1 . '<br>';

    $data.= '<span>number </span>' . $data2 . '<br>';

    $data.= '<span>details </span>' . $data3 . '<br>';

    $data.= '<span>message </span>' . $data4 . '<br>';

    //write pdf
    $mpdf->WriteHTML($data);

    //output
    $mpdf->output('file.pdf','D');
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
    <div class="circle2"></div>
    <div class="circle3"></div>
    <form class="mess_ex container" action="make.php" method="POST">

        <p id="mess">MESSAGE</p>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="author_name">name</label><input type="text" class="form-control" name="data1">
            </div>
            <div class="form-group col-md-6">
            <label for="author_details"> Author details</label><input type="text" class="form-control" name="data2">
            </div>
        </div>
        <div class="form-group">
        <label for="blog_title">Blog_title(Required)</label><input type="text" class="form-control" name="data3">
        </div>
        <div class="form-group">
        <label for="content">Content</label><textarea name="data4" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="mess_send btn btn-primary" name="submit">SEND EMAIL</button>

    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="admin.js"></script>
   
  </body>
</html>
