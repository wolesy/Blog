<?php

$admin_id = 0;
$isEditingUser = false;
$username = "";
$role = "";
$email = "";


$errors = [];


if(isset($_POST['create_admin'])){
  createAdmin($_POST);
}

if(isset($_GET['edit-admin'])){
  $isEditingUser = true;
  $admin_id = $_GET['edit-admin'];
  editAdmin($admin_id);
}

if(isset($_POST['update_admin'])){
  updateAdmin($_POST);
}

if(isset($_GET['delete-admin'])){
  $admin_id = $_GET['delete-admin'];
  deleteAdmin($admin_id);
}

function getAdminUsers(){
  global $conn, $roles;
  $sql = "SELECT * FROM users WHERE  role IS NOT NULL";
  $result = mysqli_query($conn, $sql);
  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $users;
}

function esc(String $value){
  global $conn;

  $val = trim($value);
  $val = mysqli_real_escape_string($conn, $value);
  return $val;
}

function makeSlug(String $string){
  $string = strtolower($string);
  $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
  return $slug;
}

function createAdmin($request_values){
  global $conn, $errors, $role, $username, $email;
  $username = esc($request_values['username']);
  $email = esc($request_values['email']);
  $password = esc($request_values['password']);
  $passwordConfirmation = esc($request_values['passwordConfirmation']);

  if(isset($request_values['role'])){
    $role = esc($request_values['role']);
  }

  if (empty($username)) { array_push($errors, "Please enter a username"); }
	if (empty($email)) { array_push($errors, "Please enter an email address"); }
	if (empty($role)) { array_push($errors, "Please select a role");}
	if (empty($password)) { array_push($errors, "Please enter a password"); }
	if ($password != $passwordConfirmation) { array_push($errors, "The two passwords do not match"); }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user){
    if($user['username'] === $username){
      array_push($errors, "Username alread exists");
    }

    if($user['email'] === $email){
      array_push($errors, "Email already in use");
    }
  }

  if(count($errors) == 0){
    $password = md5($password);
    $query = "INSERT INTO users (username, email, role, password, created_at, updated_at) VALUES('$username', '$email', '$role', '$password', now(), now())";
    mysqli_query($conn, $query);

    $_SESSION['message'] = "Admin user created successfully";
    header('location: users.php');
    exit(0);
  }
}

function editAdmin($admin_id){
  global $conn, $username, $role, $isEditingUser, $admin_id, $email;

  $sql = "SELECT * FROM users WHERE id=$admin_id LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $admin = mysqli_fetch_assoc($result);

  $username = $admin['username'];
  $email = $admin['email'];
}

function updateAdmin($request_values){
  global $conn, $username, $role, $isEditingUser, $admin_id, $email;

  $admin_id = $request_values['admin_id'];

  $isEditingUser = false;

  $username = esc($request_values['username']);
  $email = esc($request_values['email']);
  $password = esc($request_values['password']);
  $passwordConfirmation = esc($request_values['passwordConfirmation']);

  if(isset($request_values['role'])){
    $role = $request_values['role'];
  }

  if(count($errors) == 0){
    $password = md5($password);

    $query = "UPDATE users SET username='$username', email='$email', role='$role', password='$password' WHERE id=$admin_id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = "Admin user updated successfully";
    header("location: users.php");
    exit(0);
  }
}

function deleteAdmin($admin_id){
  global $conn;
  $sql = "DELETE FROM users WHERE id=$admin_id";
  if(mysqli_query($conn, $sql)){
    $_SESSION['message'] = "User successfully deleted";
    header("location: users.php");
    exit(0);
  }
}

 ?>
