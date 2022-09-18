<!doctype html lang="en">
<html>
<head>
  <title>Login | Cameron Scholes</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, inital-scale=1" />
  <meta name="viewport" content="height=device-height, inital-scale=1" />
  <meta name="author" content="Cameron Scholes" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/479b50a13e.js" crossorigin="anonymous"></script>
  <?php include 'include/post-setup.php';?>
</head>
<body>
  <?php include 'include/header.php';?>
  <main>
    <div class="login-container">
      <form method="post" action="login.php" class="form-group">
        <?php include 'include/errors.php';?>
        <legend>
          Login
        </legend>
        <input type="text" placeholder="Username" required="true" class="form-control" name="username" />
        <input type="password" placeholder="Password" required="true" class="form-control" name="password" />
        <div class="form-check">
          <input type="checkbox" class="form-check-input" name="rememberme"/>
          <label class="form-check-label">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-secondary" name="login-button">Login</button>
      </form>
    </div>
    <?php include 'include/sidebar.php';?>
  </main>
  <?php include 'include/footer.php';?>
</body>
</html>
