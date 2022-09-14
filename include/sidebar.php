<!DOCTYPE html lang="en">
<html>
<body>
  <div class="sidebar" >
    <div class="sidebar-search">
      <input class="sidebar-searchbar" type="text" placeholder="Search..."/>
      <button class="sidebar-search-icon"><i class="fa-solid fa-magnifying-glass "></i></button>
    </div>
    <div class="sidebar-about shadow">
      <h3 class="sidebar-about-header">About Me</h3>
      <image class="sidebar-about-img" src="https://picsum.photos/100"></image>
      <p class="sidebar-about-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum pulvinar erat, non faucibus metus cursus non. Maecenas ligula nisl, convallis sed tristique at, tempor nec justo. Donec vitae lacinia.
      </p>
    </div>
    <div class="sidebar-recent shadow">
      <h3 class="sidebar-recent-header">Recent Posts</h3>
      <?php
        for ($i=0; $i < 4; $i++) {
          ?>
          <a class="sidebar-recent-posts" id="">
          This is a post
        </a>
        <p class="sidebar-recent-posts-date">Posted on 05/09/2022</p>
          <?php
        }
        ?>
    </div>
    <div class="sidebar-newsletter shadow">
      <h3 class="sidebar-newsletter-header">Subscribe to our newsletter!</h3>
      <input type="email" placeholder="Email Address" class="sidebar-newsletter-input"/>
      <button type="submit" class="sidebar-newsletter-submit btn btn-success">Submit</button>
    </div>
  </div>
</body>
</html>
