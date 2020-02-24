<?php
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