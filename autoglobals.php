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
    echo $_SERVER['SCRIPT_NAME'] . "<br>";
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo getenv("SCRIPT_NAME") . "<br>";
    echo getenv('OS') . "<br>";
    echo $_SERVER['SERVER_PORT'] . "<br>";
    echo getenv('USERNAME') . "<br>";
    echo getenv('COMPUTERNAME') . "<br>";
    echo getenv('SCRIPT_NAME') . "<br>";
    echo getenv('DOCUMENT_ROOT') . "<br>";
    echo getenv('REQUEST_METHOD') . "<br>";
    echo getenv('SERVER_ADDR') . "<br>";
    //echo var_dump($_SERVER) . "<br>";
    //echo var_dump($GLOBALS) . "<br>";
    //echo phpinfo() . "<br>";
    ?>

    // Version: 8.2.12
    // Server Name: localhost
    // Operating System: Windows_NT
    // Port: 80
    // USERNAME: brent
    // Computer Name: BRENTON_LAPTOP
    // Script Name: /CIS134BrentonCoylePHP/autoglobals.php
    // Root Path: C:/xampp/htdocs
    // Request Method: GET
    // Server Address: ::1


</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
