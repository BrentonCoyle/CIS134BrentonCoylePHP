<?php
// Start the session to store session data
session_start();

// Check if the login form is submitted
if (isset($_POST['Submit'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $isLoggedIn = searchPasswordFile($Username, $Password);

    if ($isLoggedIn) {
        // Store username in a cookie for 30 days
        setcookie("Username", $Username, time() + 60 * 60 * 24 * 30);

        // Store session data: login success (true)
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['Username'] = $Username;


    } else {
        // Store session data: login failure (false)
        $_SESSION['isLoggedIn'] = false;
    }
}

// Corrected function name to match how you call it
function searchPasswordFile($username, $password)
{
    $PasswordFile = "password.txt";
    $fp = fopen($PasswordFile, "r");

    // Read in the usernames and passwords from the file
    $usernames = explode(" ", trim(fgets($fp)));
    $passwords = explode(" ", trim(fgets($fp)));

    fclose($fp);

    // Check for a match in the file
    for ($i = 0; $i < count($usernames); $i++) {
        if ($usernames[$i] == $username && $passwords[$i] == $password) {
            return true;
        }
    }
    return false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Basic Web Page</title>
    <link rel="stylesheet" href="Static/CSS/style.css">
</head>
<body>
<header>
    <?php require 'inc_navigation.php'; ?>
</header>

<main>

    <p><b>Results from Form</b></p>
    <?php
    // Checking if session variable 'isLoggedIn' exists
    if (isset($_SESSION['isLoggedIn'])) {
        if ($_SESSION['isLoggedIn']) {
            echo "You are logged in.<br>";
            echo "Username: $Username and Password: $Password";
        } else {
            echo "Login failed.<br>";
        }
    }
    ?>



</main>

<?php require 'inc_footer.php'; ?>

</body>
</html>
