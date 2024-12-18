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

    <!--W3 Schools is awesome!!!!-->

    <div class="background-image-container">
        <img src="Static/Images/Background.png" alt="Flower Field with Beehives" class="background-image">
        <div class="overlay-text">
            <h2>From our Hives to Your Homes</h2>
            <a href="about.php" class="learn-more-btn">Learn More</a>
        </div>

    <section class="why-us">
        <h2>Who are We?</h2>

        <p>We’re a candle company that specializes in creating fun, unique designs and captivating scents. Each of our candles is carefully crafted to not only brighten your space but also bring a touch of creativity and personality. Whether you’re looking for something whimsical, elegant, or simply soothing, our candles are made to spark joy and add a special glow to any room.</p>
    </section>

    <section class="why-us">
        <h2>Why Us</h2>

        <div class="why-us-columns">
            <div class="why-us-column">
                <h4>Homemade</h4>
                <p>We use 100% pure beeswax, harvested directly from our own hives, ensuring the highest quality and natural purity in every candle.</p>
            </div>

            <div class="why-us-column">
                <h4>Clean</h4>
                <p>Our beeswax is eco-friendly, burns longer, and creates a clean, sweet-smelling ambiance without harmful chemicals.</p>
            </div>

            <div class="why-us-column">
                <h4>Friendly</h4>
                <p>By choosing our candles, you’re supporting sustainable beekeeping practices that help protect our environment and pollinators.</p>
            </div>
        </div>
    </section>

    <section class="why-us">
        <h2>Top Sellers</h2>

        <p>Later when we add a database I'm putting items here that are the top 4 sellers at the current time in the database like this</p>
    </section>

</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
