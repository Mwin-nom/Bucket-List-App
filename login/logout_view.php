<?php
// start session
session_start();

// unset session ids created during login
unset($_SESSION['user_id']);
header("Location: login_view.php");
exit("You have successfully logged out");

?>