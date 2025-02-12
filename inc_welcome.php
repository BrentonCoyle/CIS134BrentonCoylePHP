<?php
// Start the session
session_start();

if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
    $username = $_SESSION['Username'];
    echo "Welcome {$username}!";
} else {
    echo "You need to login to access more of this site.";
}
?>
