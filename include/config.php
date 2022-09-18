<?php
  session_start();
  $ip = 'cameronscholes.com';
  $pass = 'gE78[0O4DDyr#b';


  $conn = mysqli_connect('localhost', 'root', '', 'cameron7_blog', '3306');

  if(!$conn){
    die("Error connecting to the database: " . mysqli_connect_error());
  };

  define('ROOT_PATH', realpath(dirname(__FILE__)));
  define('BASE_URL' , 'https://blog.cameronscholes.com');

 ?>
