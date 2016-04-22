<?php
include_once './model/user.php';
include_once './model/status.php';

// Set variables for credential authenication.
$login = $_POST["name"];
$password = $_POST["password"];
$login_display = "there!";
$len = strlen($login);
$encrypted_user_name = str_rot13($login);
$login_file = "login.php";
$login_string = "login";

// Check to see if user exists, and has entered the correct password.
function userExists($login, $password, $users) {
  foreach ($users as $elem) {
    if($elem['login'] == $login) {
      if ($elem['password'] == $password) {
        return true;
      }
      else {
        return false;
      }
    }
  }
  return false;
}

// Store return results from the function.
$is_true = userExists($login, $password, $users);

// If the cookie already exists, update it to new user.
if ($_COOKIE['login_name']) {
  $login_display = $_COOKIE['login_name'];
}

// Set a cookie with the username if credentials are valid.
if ($is_true == true) {
  $login_display = $login;
  $login_file = "logout.php";
  $login_string = "logout";
  setcookie('login_file', $login_file);
  setcookie('login_string', $login_string);
  setcookie('login_name', $login); // 86400 = 1 day
}

// If credentials are invalid, display error message to user.
if ($is_true == false && strlen($login) > 0) {
  // set variable to default message to replace any preexisting cookie
  $login_display = 'there!';
  setcookie('login_name', $login_display);
  $error = '<p class="error_message">Invalid Credentials</p>';
}

// Display error for case where the user enters a password but no username.
if ($login == "" && strlen($password) > 0) {
  $error = '<p class="error_message">Invalid Credentials</p>';
}
?>
