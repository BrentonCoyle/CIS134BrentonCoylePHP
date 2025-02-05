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
    require_once('databaseconnect_inc.php');

    if(isset($_POST['Submit'])) {

        $item_id = isset($_POST['item_id']) ? $_POST['item_id'] : '';

        if (!empty($item_id) && is_numeric($item_id)) {
            $query = "SELECT * FROM items WHERE item_id = $item_id";
            $result = $DBConnect->query($query);


            if ($result->num_rows > 0) {
                // Details
                $item = $result->fetch_assoc();
                echo "<h2>Item Details:</h2>";
                echo "<p><strong>Item Name:</strong> " . $item['item_name'] . "</p>";
                echo "<p><strong>Item Type:</strong> " . $item['item_type'] . "</p>";
                echo "<p><strong>Item Smell:</strong> " . $item['item_smell'] . "</p>";
                echo "<p><strong>Burn Time:</strong> " . $item['item_burn_time'] . " minutes</p>";
                echo "<p><strong>Price:</strong> $" . number_format($item['item_price'], 2) . "</p>";
            }
            // Check to see if the id is a id in the database or if thr id is numeric
            else {

                echo "<p>No item found with ID: $item_id</p>";
            }
        } else {

            echo "<p>Please enter a valid item ID.</p>";
        }
    }
    ?>

    <form action="itemdisplay.php" method="post">
        <p><label for="item_id">Enter Item ID:</label>
            <input type="text" name="item_id" id="item_id" required /></p>

        <input type="submit" name="Submit" value="Send Form" />
    </form>


</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
