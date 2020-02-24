<?php
   include('includes/connection.php');
   session_start();
   
   $id = $_SESSION['id'];
   
   $sql = "SELECT username from login_table WHERE username = '$id'";

   $result = mysqli_query($db,$sql);
   
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $ses = $row['username'];
   
   if(!isset($_SESSION['id'])){
      header("location:login.php");
      die();
   }
?>