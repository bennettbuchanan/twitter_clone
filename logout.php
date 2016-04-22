<?php

// Remove cookie login definitions.
setcookie("login_name", "there!");
setcookie("login_string", "login");
setcookie("login_file", "login.php");

// Redirect user to homepage.
header("Location: index.php");

?>
