<?php

$username = "";
$email = "";
$password = "";
$errors = array();


if(isset($_POST['reg-button'])){
  $username = esc($_POST['username']);
  $email = esc($_POST['email']);
  $password1 = esc($_POST['password']);
  $password2 = esc($_POST['confirm-password']);

  if(empty($username)){array_push($errors, "Please enter a username");}
  if(empty($email)){array_push($errors, "Please enter your email");}
  if(empty($password1)){array_push($errors, "Please enter a password");}
  if(empty($password2)){array_push($errors, "Please confirm your password");}


$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";

$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
  if ($user['username'] === $username){
    array_push($errors, "Username already exists");
  }
  if($user['email'] === $email){
    array_push($errors, "Email is already registered");
  }
}

if($password1 === $password2){
  $password = md5($password1);
  debug_to_console($password);
}

if(count($errors) == 0){

  $query = "INSERT INTO users (username, email, password, created_at, updated_at) VALUES('$username', '$email', '$password', now(), now())";
  mysqli_query($conn, $query);

  $reg_user_id = mysqli_insert_id($conn);

  $_SESSION['user'] = getUserById($reg_user_id);

  if(in_array($_SESSION['user']['role'], ['admin', 'author'])){
    $_SESSION['message'] = "You are now logged in";
    header('location: admin/dashboard.php');
    exit(0);
  }else{
    $_SESSION['message'] = "You are now logged in";
    header('location: index.php');
    exit(0);
  }
}
}


if (isset($_POST['login-button'])) {
	$username = esc($_POST['username']);
	$password = esc($_POST['password']);

	if (empty($username)) { array_push($errors, "Username required"); }
	if (empty($password)) { array_push($errors, "Password required"); }
	if (empty($errors)) {
		$password = md5($password);
     // encrypt password
     debug_to_console($password);
		$sql = "SELECT * FROM users WHERE username='$username' and password='$password' LIMIT 1";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			// get id of created user
			$reg_user_id = mysqli_fetch_assoc($result)['id'];

			// put logged in user into session array
			$_SESSION['user'] = getUserById($reg_user_id);

      if(isset($_POST['rememberme'])){
        $days = 30;
        $value = encryptCookie($reg_user_id);
        setcookie ("rememberme",$value,time()+ ($days * 24 * 60 * 60 * 1000));
      }

			// if user is admin, redirect to admin area
			if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
				$_SESSION['message'] = "You are now logged in";
				// redirect to admin area
				header('location: admin/dashboard.php');
				exit(0);
			} else {
				$_SESSION['message'] = "You are now logged in";
				// redirect to public area
				header('location: index.php');
				exit(0);
			}
		} else {
			array_push($errors, 'Wrong credentials');
		}
	}
}

function esc(String $value)
{
	// bring the global db connect object into function
	global $conn;

	$val = trim($value); // remove empty space sorrounding string
	$val = mysqli_real_escape_string($conn, $value);

	return $val;
}
// Get user info from user id
function getUserById($id)
{
	global $conn;
	$sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result);

	// returns user in an array format:
	// ['id'=>1 'username' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
	return $user;
}

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

  if( isset($_COOKIE['rememberme'] )){

    // Decrypt cookie variable value
    $userid = decryptCookie($_COOKIE['rememberme']);

    $sql_query = "SELECT * FROM users WHERE id='$userid'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_assoc($result);
    $count = $row;

    $user = getUserById($userid);
    $username = $user['username'];

    if( $count > 0 ){
       $_SESSION['user']['username'] = $username;

    }
  }

  // Encrypt cookie
  function encryptCookie( $value ) {

     $key = hex2bin(openssl_random_pseudo_bytes(4));

     $cipher = "aes-256-cbc";
     $ivlen = openssl_cipher_iv_length($cipher);
     $iv = openssl_random_pseudo_bytes($ivlen);

     $ciphertext = openssl_encrypt($value, $cipher, $key, 0, $iv);

     return( base64_encode($ciphertext . '::' . $iv. '::' .$key) );
  }

  // Decrypt cookie
  function decryptCookie( $ciphertext ) {

     $cipher = "aes-256-cbc";

     list($encrypted_data, $iv,$key) = explode('::', base64_decode($ciphertext));
     return openssl_decrypt($encrypted_data, $cipher, $key, 0, $iv);

  }

 ?>
