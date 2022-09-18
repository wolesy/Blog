<!DOCTYPE html lang="en">

<html>
  <head>
  <title>Blog Example | Cameron Scholes</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, inital-scale=1" />
  <meta name="viewport" content="height=device-height, inital-scale=1" />
  <meta name="author" content="Cameron Scholes" />
  <link rel="stylesheet" href="css/style.css" />
  <!--<link rel="stylesheet" href="include/css/blog-post.css" />-->
  <?php include 'include/post-setup.php'?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
  <script
  type="text/javascript"
  src="https://app.termly.io/embed.min.js"
  data-auto-block="on"
  data-website-uuid="82277aad-2da0-4571-861e-37d27e2b7048"
  ></script>
  </head>
  <body>
  <?php include 'include/header.php'?>
  <main>
    <div class="blog-posts">
          <?php
          $i = 0;
            foreach (array_reverse($posts) as $post){
            if($i > 6){
              break;
            }else{
              include 'include/blog-post.php';
              $i += 1;
            }
            }?>
      </div>

    <?php include 'include/sidebar.php'?>
  </main>
  <?php include "include/footer.php"?>
  </body>
</html>
