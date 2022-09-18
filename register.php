<!doctype html lang="en">
<html>
<head>
  <title>Register | Cameron Scholes</title>
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
    <div class="register-container">
    <form class="form-group" method="post" action="register.php">
      <legend>
        Register
      </legend>
      <?php include 'include/errors.php';?>
      <input type="text" name="username" placeholder="Username" required="true" class="form-control"/>
      <input type="email" name="email" placeholder="Email" required="true" class="form-control"/>
      <input type="password" name="password" placeholder="Password" required="true" class="form-control"/>
      <input type="password" name="confirm-password" placeholder="Confirm Password" required="true" class="form-control"/>
      <div class="form-check">
      <input type="checkbox" name="privacy-checkbox" class="form-check-input" id="policy-check" required="true"/>
      <label class="form-check-label" for="policy-check">I agree to the <a href="privacy.php">Privacy Policy</a></label>
    </div>
      <button type="submit" class="btn btn-secondary" name="reg-button">Register</button>
    </form>
  </div>
    <?php include 'include/sidebar.php';?>
  </main>

  <?php include 'include/footer.php';?>
</body>
</html>
