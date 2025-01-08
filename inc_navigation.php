<?php
// Define navigation data
$navCaptions = ["Login","Home", "About", "Contact", "Products"];
$navLinks = ["password.php","index.php", "about.php", "contact.php", "items.php"];
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