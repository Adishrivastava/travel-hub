<?php
   
    include_once('includes/connection.php');
    session_start();
    
    
   
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    } else {
        header("location: login.php");
    }
    
          
    $sql = "SELECT email FROM contacts WHERE id='.$id.'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    echo $row['email'];
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    
 
    require_once __DIR__ . '/vendor/autoload.php';
   

    if(isset($_POST['submit']))
    {
        $data1 = mysqli_real_escape_string($db,$_POST['data1']);
        $data2 = mysqli_real_escape_string($db,$_POST['data2']);
        $data3 = mysqli_real_escape_string($db,$_POST['data3']);
        $data4 = mysqli_real_escape_string($db,$_POST['data4']);

        $mpdf = new \Mpdf\Mpdf();

        $data = '';
       

        $data.= '<h1>MESSAGE</h1>';

        $data.= '<b><span>From : </span>' . $data1 . '</b><br>';

        $data.= '<span> </span>' . $data2 . '<br>';

        $data.= '<span>Subject :  </span>' . $data3 . '<br>';

        $data.= '<span>Message : </span>' . $data4 . '<br>';

        //write pdf
        $mpdf->WriteHTML($data);

        //pdf saved in a variable
        $pdf = $mpdf->Output('','S');
        
        // enquiry data
        $enquirydata = [
          'data1' => $data1,
          'data2' => $data2,
          'data3' => $data3,
          'data4' => $data4
        ];
        
        $result = '';
        function sendEmail($pdf, $enquirydata)
        {

           
            $mail = new PHPMailer(true);


          try {
              //Server settings
              $mail->SMTPDebug = false;                      // Enable verbose debug output
              $mail->isSMTP();                                            // Send using SMTP
              $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
              $mail->Username   = 'sharingonItachi13@gmail.com';                     // SMTP username
              $mail->Password   = '';                               // SMTP password
                       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
              $mail->Port       = 587 ;                                    // TCP port to connect to
              $mail->SMTPSecure = 'tls';
              //Recipients
              $mail->setFrom('sharingonItachi13@gmail.com', 'Itachi');
              $mail->addAddress('adityashri584@gmail.com', '');     // Add a recipient
                          // Name is optional
              // Attachments
              $mail->addStringAttachment($pdf, 'attachment.pdf');         // Add attachments
            // Optional name

              // Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = 'message from Travel hub';
              $mail->Body    = $enquirydata['data4'];
              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
              $result = "Email has been sent";
          } catch (Exception $e) {
              $result = "Email could not be sent.";
          }
        }
        sendEmail($pdf, $enquirydata);
       
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

   
    <link rel="stylesheet" href="admin.CSS">

    <title>Admin message</title>
  </head>
  
  <body>
     
     <!-- circles for design -->
    <div class="circle2"></div>
    <div class="circle3"></div>
    
    <!-- message for the person -->
    <form class="mess_ex container" action="" method="POST">

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
    <script>
        <?php if(!empty($result))
            {
                echo "alert(". $result .")";
            }
          ?>
    </script>
   
  </body>
</html>
