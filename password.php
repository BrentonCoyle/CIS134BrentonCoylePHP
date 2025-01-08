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
    include 'inc_welcome.php';
    ?>


    <?php

    $Passwords = ["Brenton_Coyle2025","Luke_Matheis2025","Wow_Its_2025","CandleStore#1","GoodPassword$100","bad","Brenton1","ColdOut25#","badpassword#2","lassword"];

    function checkPassword($Passwords){
        $txt = "";
        $len = count($candleName);
        for($i = 0; $i < $len; $i++){

            $txt = $txt."Name: $candleName[$i]<br> Price: $candlePrice[$i].<br><br>";
        }
        return $txt;
    }
    ?>



</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
