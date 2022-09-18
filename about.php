<!DOCTYPE html lang="en">
<html>
<head>
  <script src="scripts/about.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/about.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
  <title>About Me | Joe's Blog</title>
  <?php include 'include/post-setup.php';?>
</head>
<body onload="hideAbout()">
  <?php include 'include/header.php';?>
  <main>
    <div class="about-container">
    <h2 class="about-header">About Me</h2>
    <img class="about-image" src="https://cdn.cameronscholes.com/images/blog/about-me-image.JPG" />
    <p class="about-text">
Hi, I'm Cameron, welcome to my blog :)

This is made as part of my attempt to build a portfolio to help me find a job. I wanted to flex my muscles and build on my skills to help me become a better programmer.
I have over a decade experience in web development and have been trying to find ways to test myself.

I am 22 and currently unemployed. I have worked in customer service for over 6 years while I have been building on my skills. Only a few months ago I decided to take the leap and work for myself!
This will also be the place I share my updates, thoughts and just random stuff.

Please enjoy!
    </p>
    <div class="about-social">
      <a class="social-item" href="https://www.linkedin.com/in/cameron-s-5b6a9a116/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
      <a class="social-item" href="https://www.twitter.com/scholesy_wolesy" target="_blank"><i class="fa-brands fa-twitter"></i></a>
      <a class="social-item" href="https://www.instagram.com/cam_scholes/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a class="social-item" href="https://github.com/wolesy" target="_blank"><i class="fa-brands fa-github"></i></a>
    </div>
    </div>
    <?php include 'include/sidebar.php';?>
  </main>
  <?php include 'include/footer.php';?>
</body>
</html>
