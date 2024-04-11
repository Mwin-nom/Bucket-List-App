<?php
// Start the session
session_start();

//check to see if user is logged in by using session id
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

if (!isLoggedIn()) {
    header("Location: ../login/login_view.php ");
    die();
}
