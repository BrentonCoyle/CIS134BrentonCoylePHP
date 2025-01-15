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

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];


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

    $isLoggedIn = SearchPasswordFile($Username, $Password);

    if ($isLoggedIn) {
        echo "User is logged in.<br>";
    } else {
        echo "User is not logged in.<br>";
    }
    ?>


</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>