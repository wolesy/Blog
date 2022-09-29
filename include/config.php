<?php
  session_start();
  $ip = 'cameronscholes.com';
  $pass = [PASSWORD];


  $conn = mysqli_connect('localhost', 'root', '', 'cameron7_blog', '3306');

  if(!$conn){
    die("Error connecting to the database: " . mysqli_connect_error());
  };

 ?>
