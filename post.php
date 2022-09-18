<?php include 'include/post-setup.php'?>
<?php $post = getPost();
?>

<!DOCTYPE html lang='en'>
<html>
<head>
  <title><?php echo $post['title']?> | Joe's Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
  <style>
  <?php
  include 'css/style.css';
  include 'include/css/blog-page-post.css';
  ?>
  </style>
</head>
<?php
?>
<body>
  <?php include 'include/header.php';?>
  <main>


    <div class="blog-page-post">
      <h2 class="blog-page-post-header"><?php echo $post['title']?></h2>
      <h3 class=blog-page-post-subheader>Posted by <span class="post-poster"><?php echo $post['author']?></span> on <span class="post-date"><?php echo date("F j, Y ", strtotime($post['created_at']))?></span></h3>
      <div class="blog-page-post-content">
          <?php echo $post['body'];?>
      </div>
      <div class="blog-page-post-bottom">
        <div class="blog-page-post-bottom-icons">
          <div class="bottom-icon-container">
            <i class="fa-regular fa-heart bottom-icon"></i>
            <p class="bottom-count">
              5
            </p>
          </div>
          <div class="bottom-icon-container">
            <i class="fa-regular fa-comment bottom-icon"></i>
            <p class="bottom-count">
              5
            </p>
          </div>
          <div class="bottom-icon-container">
            <i class="fa-solid fa-share-nodes bottom-icon"></i>
            <p class="bottom-count">
              5
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'include/sidebar.php';
    ?>
  </main>
  <?php include 'include/footer.php';?>
</body>
