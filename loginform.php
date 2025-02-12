<?php
session_start();
// Check if no cookie, and register button has been submitted.
// Then create a cookie from form input.
if (!isset($_COOKIE["Password"]) && isset($_POST["Password"])) {
    setcookie("Password", $_POST['Password'], time() + 60 * 60 * 24 * 30);
}

if (!isset($_COOKIE["Username"]) && isset($_POST["Username"])) {
    setcookie("Username", $_POST['Username'], time() + 60 * 60 * 24 * 30);
}

// Check if cookie exists and Signout button has been submitted.
// Then delete the cookie.
if (isset($_COOKIE["Username"]) && isset($_COOKIE["Password"]) && isset($_POST["Signout"])) {

    $_SESSION["Username"] = "None";
    $_SESSION["isLoggedIn"] = false;

    setcookie("Username", "", time() - 30);
    setcookie("Password", "", time() - 30);
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

    <?php
    require 'inc_navigation.php';
    ?>

</header>



<main>

    <?php
    if (isset($_COOKIE["Username"])) {
        if (isset($_POST["Signout"])) {
            echo "Goodbye. You are signed out.";
            echo "<form method='POST' action='loginform.php'>\n";
            echo "<input type='submit' name='Continue' value='Continue'>\n";
            echo "</form>\n";
        } else {
            echo "Hello " . $_COOKIE["Username"];
            echo "<form method='POST' action='loginform.php'>\n";
            echo "<input type='submit' name='Signout' value='Sign out'>\n";
            echo "</form>\n";

            echo "<form method='POST' action='logindisplay.php'>\n";
            echo "<input type='submit' name='Submit' value='Continue'>\n";
            echo "<input type='hidden' name='Username' value='" . $_COOKIE["Username"] . "' />\n";
            echo "<input type='hidden' name='Password' value='" . $_COOKIE["Password"] . "' />\n";
            echo "</form>\n";
        }
    } else {
        if (isset($_POST["Register"]) && $_POST["Username"]) {
            echo "Thank you " . $_POST["Username"] . " for registering.";
            echo "<form method='POST' action='logindisplay.php'>\n";
            echo "<input type='hidden' name='Username' value='" . $_POST["Username"] . "' />\n";
            echo "<input type='hidden' name='Password' value='" . $_POST["Password"] . "' />\n";
            echo "<input type='submit' name='Submit' value='Continue'>\n";
            echo "</form>\n";
        } else {
            echo "Welcome guest! What is your name?<br />";
            echo "<form method='POST' name='login' action='loginform.php'>\n";
            echo "<input type='text' name='Username' placeholder='Enter Username'>\n";
            echo "<input type='text' name='Password' placeholder='Enter Password'>\n";
            echo "<input type='submit' name='Register' value='Register'>\n";
            echo "</form>\n";
        }
    }

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

    if(isset($_POST['Register']))
    {
        if(!searchPasswordFile($_POST['Username'], $_POST['Password'])){
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $PasswordFile = "password.txt";

            $FileArray = file('password.txt', FILE_IGNORE_NEW_LINES);
            $UsernamesLine = $FileArray[0];
            $PasswordsLine = $FileArray[1];

            $UsernamesLine .= " " . $Username;

            $PasswordsLine .= " " . $Password;


            $fp = fopen($PasswordFile, "w");

            if ($fp) {
                fwrite($fp, $UsernamesLine . "\n");
                fwrite($fp, $PasswordsLine . "\n");
                fclose($fp);

                echo "Account created successfully!<br>";
            } else {
                echo "Failed to create account.<br>";
            }

        }
    }
    ?>




</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
