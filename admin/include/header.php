<header>
  <a href="dashboard.php"><h1>Admin | Joe's Blog</h1></a>
  <?php if (isset($_SESSION['user']['username'])){?>
    <div class="header-user">
    <p class="header-username">
      <?php echo $_SESSION['user']['username']?>
    </p>
      <a href="logout.php" class="logout">logout</a>
    </div>
  <?php } ?>
</header>
