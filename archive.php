<!DOCTYPE html lang="en">
<html>
<head>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
  <title>Post Archive | Joe's Blog</title>
  <?php require_once('include/config.php');?>
  <?php require_once('include/publicFunctions.php'); ?>
  <?php $posts = getPublishedPosts(); ?>
</head>
<body>

  <?php include "include/header.php";?>
  <main>
  <div class="archive-container">
  <?php $months = sortPosts($posts)?>

  <?php foreach($months as $month){
    ?><h3 class="archive-header"><?php echo $month ?></h3>
    <ul class="archive-list">
  <?php
    foreach ($posts as $post) {
      if(date("F Y", strtotime($post['created_at'])) === $month){
      ?>
      <li class="archive-item">
          <a href="post.php?s=<?php echo $post['slug']?>">
          <?php echo $post['title'] ?>
          </a>
      </li>
      <?php
    }
  }?>
  </ul>
  <?php } ?>

  </div>
  <?php include "include/sidebar.php";?>
  </main>
  <?php include 'include/footer.php';?>
</body>
</html>
