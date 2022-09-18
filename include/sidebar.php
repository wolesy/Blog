  <?php

  $posts = getPublishedPosts();

  ?>
  <div class="sidebar" >
    <div class="sidebar-search">
      <input class="sidebar-searchbar" type="text" placeholder="Search..."/>
      <button class="sidebar-search-icon"><i class="fa-solid fa-magnifying-glass "></i></button>
    </div>
    <div class="sidebar-about shadow">
      <h3 class="sidebar-about-header">About Me</h3>
      <div class="sidebar-about-image-container">
      <!--<image class="sidebar-about-img" src="https://cdn.cameronscholes.com/images/blog/about-me-image.JPG"></image>-->
      </div>
      <p class="sidebar-about-text">
        Hi, I'm Cameron! I have over a decade experience in web development and I have built this blog by hand to flex my muscles and test my skills. Im surprised at how well it worked :)
      </p>
    </div>
    <div class="sidebar-recent shadow">
      <h3 class="sidebar-recent-header">Recent Posts</h3>
      <?php
      $i = 0;
        foreach(array_reverse($posts) as $post) {

          if($i >= 4){
            break;
          }else{
            ?>
            <a class="sidebar-recent-posts" id="" href="post.php?s=<?php echo $post['slug']?>">
            <?php echo $post['title'];?>
          </a>
          <p class="sidebar-recent-posts-date">Posted on <?php echo date("d M Y", strtotime($post['created_at']))?></p>
            <?php

            $i += 1;
          }
        }
        ?>
    </div>
    <div class="sidebar-newsletter shadow">
      <h3 class="sidebar-newsletter-header">Subscribe to our newsletter!</h3>
      <input type="email" placeholder="Email Address" class="sidebar-newsletter-input"/>
      <button type="submit" class="sidebar-newsletter-submit btn btn-success">Submit</button>
    </div>
  </div>
