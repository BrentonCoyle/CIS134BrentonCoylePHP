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

    <p><b>Results from Form</b></p>
    <?php

    if(isset($_POST['Submit'])) {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $isLoggedIn = SearchPasswordFile($Username, $Password);

        if ($isLoggedIn) {
            echo "User is logged in.<br>";
        } else {
            echo "User is not logged in.<br>";
        }

    }

    if(isset($_POST['Create']))
    {
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

    function searchPasswordFile($username, $password)
    {
        $PasswordFile = "password.txt";
        $fp = fopen($PasswordFile, "r");

        $usernames = explode(" ", trim(fgets($fp)));
        $passwords = explode(" ", trim(fgets($fp)));

        fclose($fp);


        for ($i = 0; $i < count($usernames); $i++) {
            if ($usernames[$i] == $username && $passwords[$i] == $password) {
                echo "Match Found!";
                return true;
            }
        }
        echo "No Match Found!";
        return false;

    }


    ?>


</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>