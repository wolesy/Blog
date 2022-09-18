<?php require_once 'include/login_registration.php'?>
  <header>
    <a class="header-text" href="index.php"><h1 class="header-text">Joe's Blog</h1></a>

    <nav>
      <a href="index.php" class="nav-item">Home</a>
      <a href="about.php" class="nav-item">About Me</a>
      <a href="archive.php" class="nav-item">Archive</a>
      <?php if(isset($_SESSION['user']['username'])){ ?>
      <p class="logged-header">
        Welcome <?php echo $_SESSION['user']['username']?>
      </p>
      <a class="logout" href="logout.php">Logout</a>
    <?php  }else{ ?>
      <a href="register.php" class="nav-item">Register</a>
      <a href="login.php" class="nav-item">Login</a>
    <?php } ?>
    </nav>
  </header>
