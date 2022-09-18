<!DOCTYPE html lang="en">

<html>
<head>
</head>
<body>
  <div class="blog-post-container shadow">
  <div class="blog-post" id="">
    <h2 class="post-header"><?php echo $post['title'];?></h2>
    <h3 class="post-subheader">Posted by <span class="post-poster"><?php echo $post['author']?></span> on <span class="post-date"><?php echo date("F j, Y ", strtotime($post['created_at'])); ?></span></h3>
    <div class="post-content">
<?php echo $post['body'];?>
</div>
    <a class="post-read-more" href="post.php?s=<?php echo $post['slug'];?>">Read more...</a>
  </div>
  <div class="blog-comments-container" id="">

  <div class="blog-comments">
    <h4 class="comments-header">Comments</h4>
  <div class="comment">
  <h5 class="commenter">Name</h5>
  <p class="date">5th Sept 2022</p>
  <p class="comment-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer est.
  </p>
  </div>
</div>
</div>
</div>
</body>
</html>
