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
    // Define navigation data
    $navCaptions = ["Unit 4 Passwords","Unit 5 Autoglobals", "Unit 5 Form P1", "Unit 5 Display P1"];
    $navLinks = ["password.php","autoglobals.php","loginform.php","logindisplay.php"];
    ?>

    <div id="title">
        <h1>Bonus Pages</h1>
        <nav>
            <ul>
                <?php
                foreach ($navCaptions as $index => $caption) {
                    echo "<li><a href=\"{$navLinks[$index]}\">$caption</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>


</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
