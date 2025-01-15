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

    <p><b>Form For Login</b></p>
    <form name="login" action="logindisplay.php" method="post">
        <p>Your Username: <input type="text" name="Username" value="" /></p>
        <p>Your Password: <input type="text" name="Password" value="" size="5" /></p>
        <p>
            <input type="reset" value="Clear Form" />
            &nbsp;&nbsp;
            <input type="submit" name="Submit" value="Send Form" />

            <input type="submit" name="Create" value="Create Account" />
        </p>
    </form>



</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
