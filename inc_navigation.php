<?php
// Define navigation data
$navCaptions = ["Home","Login/Signup", "About", "Contact", "Products","Item Display","Item Form","Class Files"];
$navLinks = ["index.php","loginform.php", "about.php", "contact.php", "items.php","itemdisplay.php","itemform.php","class_files.php"];
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