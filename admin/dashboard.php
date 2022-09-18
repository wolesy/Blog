<?php

include '../include/config.php';
include 'include/admin_functions.php';
?>

<!doctype html lang="en">
<html>
<head>
  <title>Admin Dashboard | Joe's Blog</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, inital-scale=1" />
  <meta name="viewport" content="height=device-height, inital-scale=1" />
  <meta name="author" content="Cameron Scholes" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include 'include/header.php';?>
  <main>
    <?php include 'include/menu.php';?>
    <div class="stats-container">
    <h2 class="stats-header">Stats</h2>
    <div class="stats">
    <a href="users.php" class="first">
      <p>
        <span>43</span><br />New Users
      </p>
    </a>
    <a href="posts.php">
      <p>
        <span>43</span><br />New Posts
      </p>
    </a>
    <a>
      <p>
        <span>43</span><br />New Comments
      </p>
    </a>
  </div>
    </div>
    <div class="buttons">
      <a href="users.php">Add Users</a>
      <a href="posts.php">Add Posts</a>
    </div>
  </main>
</body>
</html>
