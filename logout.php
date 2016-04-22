<?php

// Delete session cookies from browser. This way the header variables
// will return to their default state.
setcookie("login_name", "", time()-3600);
setcookie("login_string", "", time()-3600);
setcookie("login_file", "", time()-3600);

// Redirect user to homepage.
header("Location: index.php");

?>
