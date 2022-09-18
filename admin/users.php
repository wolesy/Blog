<?php

  include '../include/config.php';

  include 'include/admin_functions.php';

  $admins = getAdminUsers();
  $roles = ['Admin', 'Author'];

 ?>

 <!DOCTYYPE html lang="en">
<html>
<head>
  <title>Users | Joe's Blog</title>
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
    <div class="action">
      <h1 class="page-title">Create/Add User</h1>

      <form method="post" action="users.php" class="users-form">
        <?php include 'include/errors.php';

        if($isEditingUser){?>
          <input type="hidden" name="admin_id" value="<?php echo $admin_id;?>">
        <?php }
        ?>
        <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
        <input type="email" name="email" value="<?php echo $email?>" placeholder="Email">
        <input type="password" name="password" placeholder="Password" />
        <input type="password" name="passwordConfirmation" placeholder="Confirm Password" />
        <select name="role">
            <option value="" selected disabled>
              Assign Role
            </option>
            <?php foreach ($roles as $key => $role) { ?>
              <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
            <?php } ?>
        </select>

        <?php if($isEditingUser === true){ ?>
          <button type="submit" class="btn" name="update_admin">UPDATE</button>
        <?php }else{ ?>
          <button type="submit" class="btn" name="create_admin">Save User</button>
        <?php } ?>
      </form>
    </div>

    <div class="table-div">
      <?php include 'include/messages.php';

      if(empty($admins)){?>
        <h2>No admins in the database...</h2>

      <?php }else{ ?>
        <table class="table">
          <thead>
            <th>
              N
            </th>
            <th>
              Admin
            </th>
            <th>
              Role
            </th>
            <th colspan="2">
              Action
            </th>
          </thead>
          <tbody>
            <?php foreach($admins as $key => $admin){ ?>
              <tr>
                <td>
                  <?php echo $key + 1; ?>
                </td>
                <td>
                  <?php echo $admin['username'];?> &nbsp;
                  <?php echo $admin['email'];?>
                </td>
                <td>
                  <?php echo $admin['role'];?>
                </td>
                <td>
                  <a class="fa fa-pencil btn edit" href="users.php?edit-admin=<?php echo $admin['id']?>"></a>
                </td>
                <td>
                  <a class="fa fa-trash btn delete" href="users.php?delete-admin=<?php echo $admin['id']?>"></a>
                </td>
              </tr>

            <?php } ?>
          </tbody>
        </table>

      <?php } ?>
    </div>
  </main>
</body>
</html>
