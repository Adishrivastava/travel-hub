<?php
   $servername = "localhost";
   $username = "root";
   $password = "mysql_Adi29";
   $dbname = "demo";
   
   // Create connection
   $db = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$db) {
       die("Connection failed: " . mysqli_connect_error());
   }
   
?>