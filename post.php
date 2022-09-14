<!DOCTYPE html lang='en'>
<html>
<head>
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
      <h2 class="blog-page-post-header">This is a post</h2>
      <h3 class=blog-page-post-subheader>Posted by <span class="post-poster">Cameron</span> on <span class="post-date">05/09/2022</span></h3>
      <p class="blog-page-post-content">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis, mauris id pulvinar convallis, eros orci mattis dui, non feugiat purus tortor id libero. Phasellus consequat, sem in pharetra accumsan, lectus libero venenatis quam, sed tincidunt elit mauris eget quam. Phasellus laoreet eleifend magna. Vivamus sit amet purus tempus, convallis ipsum accumsan, pulvinar ligula. Vestibulum vitae purus vitae augue porta dignissim in id risus. Sed eleifend scelerisque erat. Ut luctus odio ex. Pellentesque porta ornare laoreet. In hac habitasse platea dictumst. Etiam nunc nisi, semper ut tortor eu, vulputate facilisis neque. Praesent fermentum turpis eu odio dictum, vel convallis elit facilisis. Maecenas dapibus hendrerit commodo. Nulla facilisi. Morbi volutpat quis massa vel dapibus. Vivamus eleifend consequat nulla, quis sodales orci cursus in.

Maecenas et egestas mi, vitae porta tortor. Sed et sem eu est fermentum consectetur. Ut venenatis, elit a euismod volutpat, felis sem lobortis odio, ac blandit nulla odio a orci. Integer elementum diam ut sollicitudin semper. Sed ultricies risus at ornare blandit. Pellentesque facilisis metus in nulla scelerisque dapibus. Fusce porttitor hendrerit ullamcorper. Morbi et fermentum lorem, et tincidunt tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque porttitor rhoncus tortor. Suspendisse cursus turpis leo, at pretium ex pharetra quis. Aliquam erat volutpat. Vestibulum consequat vehicula facilisis.

Nullam quis lacinia arcu, eu pulvinar tortor. Proin eleifend urna sed ipsum gravida, quis accumsan risus aliquam. Nunc tempor vehicula egestas. Proin ut lectus at neque tincidunt pellentesque ac sed urna. Fusce quis venenatis sapien. Etiam diam mi, sagittis sed lacinia et, gravida non nibh. Maecenas lobortis ante ac justo convallis ultricies. Mauris maximus orci sit amet imperdiet porttitor.

Integer sagittis, magna vitae auctor feugiat, purus nibh molestie libero, sed commodo odio mauris et nisl. Vivamus quis nunc quis diam malesuada lacinia quis id mi. Vestibulum rutrum in purus vel sollicitudin. Cras mollis erat ac eros porttitor congue. Duis sollicitudin neque eu purus aliquet pharetra. Pellentesque non pretium orci. Praesent sodales pulvinar arcu in tempus. Vivamus non libero dui. Cras at semper orci. Proin sodales mollis eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi sit amet auctor velit, sit amet blandit urna.
      </p>
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
