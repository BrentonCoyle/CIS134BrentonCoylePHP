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
    echo "<p>Thank you, $Username for signing in.</p>\n";
    echo "<p>Username: $Username </p>\n";
    echo "<p>Password: $Password </p>\n";
    ?>


</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>