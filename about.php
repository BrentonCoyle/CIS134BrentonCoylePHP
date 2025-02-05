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

    <p>About me page</p>

    <?php //Creating two dimensional associative array
$Distances = array(
 "Albia" => array(
 "Albia" => 0,
 "Bloomfield" => 28.26,
 "Centerville" => 21.04,
 "Oskaloosa" => 19.95,
 "Ottumwa" => 21.03
 ),
 "Bloomfield" => array(
 "Albia" => 28.26,
 "Bloomfield" => 0,
 "Centerville" => 19.54,
 "Oskaloosa" => 39.26,
 "Ottumwa" => 18.26
 ),
 "Centerville" => array(
 "Albia" => 21.04,
 "Bloomfield" => 19.54,
 "Centerville" => 0,
 "Oskaloosa" => 40.59,
 "Ottumwa" => 31.38
 ), "Oskaloosa" => array(
 "Albia" => 19.95,
 "Bloomfield" => 39.26,
 "Centerville" => 40.59,
 "Oskaloosa" => 0,
 "Ottumwa" => 22.81
 ),
 "Ottumwa" => array(
 "Albia" => 21.03,
 "Bloomfield" => 18.26,
 "Centerville" => 31.38,
     "Oskaloosa" => 22.81,
     "Ottumwa" => 0
 ) );
    echo "List of all the members of the associative array.";
    var_dump($Distances);
    echo "<h3>Example to display one member of associative array.</h3>";
    $StartCity = "Centerville";
    $EndCity = 'Albia';
    $Distance = $Distances[$StartCity][$EndCity];
    echo "<p>The distance from $StartCity to $EndCity is ". $Distance . " kilometers.</p>\n";
    echo "<h3>Example to display all members of associative array.</h3>";
    foreach ($Distances as $StartCity => $CityArray){
        echo "The distance from $StartCity ";
        echo "<ul>";
        foreach ($CityArray as $EndCity => $Distance)
            if ($Distance != 0){
                echo "<li>to $EndCity is " . $Distance . " kilometers.</li>";
            }
        echo "</ul>";
    }
    ?>

</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
