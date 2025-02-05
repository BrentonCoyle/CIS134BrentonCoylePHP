
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Basic Web Page</title>
    <link rel="stylesheet" type="text/css" href="Static/CSS/style.css">

    <style>
        form {
        background-color: #FFFFFF;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        font-size: 1.1rem;
        max-width: 600px;
        box-sizing: border-box;
        }

        form p {
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 10px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #2B1901;
        }

        form input[type="radio"] {
            margin-right: 10px;
        }

        form input[type="radio"]:checked {
            background-color: #B8AC9E;
        }

        form input[type="checkbox"] {
            margin-right: 10px;
        }

        form input[type="number"],
        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1.1rem;
            box-sizing: border-box;
        }

        form input[type="submit"],
        form input[type="reset"] {
        background-color: #55442E;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1.1rem;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 10px;
    }
        form input[type="submit"]:hover,
        form input[type="reset"]:hover {
            background-color: #2B1901;
        }

        form input[type="submit"]:active,
        form input[type="reset"]:active {
            background-color: #3D2B1F;
        }

    form b {
        font-size: 1.5rem;
        color: #55442E;
        margin-bottom: 20px;
        display: block;
        text-align: center;
    }


        form p input[type="number"] {
            width: auto;
            display: inline-block;
        }

    </style>

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

        if(isset($_POST['Submit']))
        {

            if (empty(trim($_POST['Name']))) {
                echo "Name is required";
            } else {
                $name = $_POST['Name'];
            }

            if (empty(trim($_POST['choice']))) {
                echo "Name is required";
            } else {
                $choice = $_POST['choice'];
            }

            if (empty(trim($_POST['Smell']))) {
                echo "Smell is required";
            } else {
                $smell = $_POST['Smell'];
            }

            if (empty($_POST['Time']) || !is_numeric($_POST['Time'])) {
                echo "Valid burn time is required";
            } else {
                $time = $_POST['Time'];
            }

            if (empty($_POST['Price']) || !is_numeric($_POST['Price'])) {
                echo "Valid burn time is required";
            } else {
                $price = $_POST['Price'];
            }

            $TABLENAME = "items";
            $InsertTableStatement = "INSERT INTO $TABLENAME (item_name, item_type, item_smell, item_burn_time, item_price) 
                             VALUES ('$name', '$choice', '$smell', '$time', '$price')";

            if(!empty(trim($_POST['Name'])) and !empty(trim($_POST['choice'])) and !empty(trim($_POST['Time'])) and !empty(trim($_POST['Price'])) and !empty(trim($_POST['Smell']))) {
                // This is an error but it works so idk
                if ($DBConnect->query($InsertTableStatement)) {
                    echo "New record created successfully!";
                } else {
                    echo "Error: " . $InsertTableStatement . "<br>" . $DBConnect->error;
                }
            }
        }


    ?>
    <form name="item" action="itemform.php" method="post">
        <p>What Type of Candle</p>
        <label>
            <input type="radio" name="choice" value="Pillar Candle"> Pillar Candle
        </label>
        <label>
            <input type="radio" name="choice" value="Wax Melt"> Wax Melt
        </label>
        <label>
            <input type="radio" name="choice" value="Novelty"> Novelty
        </label>
        <label>
            <input type="radio" name="choice" value="Taper"> Taper
        </label>

        <p>Fragrance Name<input type="text" name="Smell" placeholder="Fragrance" value="" /></p>
        <p>How Long does the candle burn for: <input type="number" name="Time" placeholder="Enter Minutes" /></p>
        <p>What is the candle name<input type="text" name="Name" placeholder="Enter Name" /></p>
        <p>Candle Price: <input type="number" step="0.1" name="Price" placeholder="Enter Price" /></p>

        <p>
            <input type="reset" value="Clear Form" />
            &nbsp;&nbsp;
            <input type="submit" name="Submit" value="Send Form" />
        </p>
    </form>


</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>