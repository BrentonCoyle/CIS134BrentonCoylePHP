<?php
// Define navigation data
$navCaptions = ["Home", "About", "Contact", "Products","Class Files"];
$navLinks = ["index.php", "about.php", "contact.php", "items.php","class_files.php"];
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