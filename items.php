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

<?php
require 'inc_footer.php';
?>

</body>
</html>
