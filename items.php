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
    <p>Products page version 1</p>

    <?php
    include 'phpFiles/helpers.php';

    $products = [
        ["name" => "Scented Candle", "price" => 7.99, "size" => "Small", "smell" => "Lavender"],
        ["name" => "Pillar Candle", "price" => 9.49, "size" => "Medium", "smell" => "Vanilla"],
        ["name" => "Basic Candle", "price" => 4.99, "size" => "Small", "smell" => "Unscented"],
        ["name" => "Taper Candle", "price" => 9.99, "size" => "Large", "smell" => "Gingerbread"],
        ["name" => "Jar Candle", "price" => 12.49, "size" => "Medium", "smell" => "Unscented"],
    ];
    ?>

    <table>
        <thead>
           <tr>
               <th>Name</th>
               <th>Price</th>
               <th>Size</th>
               <th>Smell</th>
           </tr>
        </thead>
        <tbody>
        <?php
            foreach ($products as $candle) {
                echo "<tr>
                        <td>{$candle["name"]}</td>
                        <td>{$candle["price"]}</td>
                        <td>{$candle["size"]}</td>
                        <td>{$candle["smell"]}</td>";
            }
        ?>
        </tbody>
    </table>

</main>

<footer>
    <p>&copy; 2024 Brenton Coyle. All rights reserved.</p>
</footer>
</body>
</html>
