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

    $navCaptions = ["Home", "About","Contact","Products"];
    $navLinks = ["index.php","about.php","contact.php", "items.php"];

    ?>

    <div id="title">
        <h1>Candle Shop</h1>
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

</header>

<main>

    <p>About me page</p>

</main>

<footer>
    <p>&copy; 2024 Brenton Coyle. All rights reserved.</p>
</footer>
</body>
</html>
