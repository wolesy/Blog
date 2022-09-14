<!DOCTYPE html lang="en">

<html>
  <head>
  <title>Blog Example | Cameron Scholes</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, inital-scale=1" />
  <meta name="viewport" content="height=device-height, inital-scale=1" />
  <meta name="author" content="Cameron Scholes" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php include 'include/header.php'?>
  <main>
    <div class="blog-posts">
          <?php
            for ($i=0; $i < 5; $i++) {
              include 'include/blog-post.php';

            }
            ?><style><?php include 'include/css/blog-post.css';?></style>


      </div>

    <?php include 'include/sidebar.php'?>
  </main>
  <?php include "include/footer.php"?>
  </body>
</html>
