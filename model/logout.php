<!-- delete the cookie upon logout -->

<?php

setcookie("login_name", "", time() - 3600);
setcookie('login_name', 'there!');

?>
