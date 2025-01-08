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
    // GIT GIVE ME A HEART-ATTACK IT SAID GENERIC PASSWORD LEAKED ON MY ACCOUNT
    // I THOUGHT MY GITHUB ACCOUNT WAS LEAKED IT WAS BECAUSE I USED A NAME AND THE DATE
    $Passwords = ["Brenton_Coyle2025","Luke_Matheis2025","Wow_Its_2025","CandleStore#1","GoodPassword$100","bad password","Brenton1","ColdOut25#","badpassword#2","lassword"];

    function checkPassword($Passwords){
        foreach($Passwords as $Password)
        {
            $hasSpecialChar = preg_match('/[\W_]/', $Password);
            $hasNumber = preg_match('/\d/', $Password);
            $hasUpperCase = preg_match('/[A-Z]/', $Password);
            $hasLowerCase = preg_match('/[a-z]/', $Password);

            if ($hasSpecialChar && $hasNumber && $hasUpperCase && $hasLowerCase && strlen($Password) >= 12 && !preg_match('/\s/', $Password)) {
                echo "<p>The password '$Password' is strong.</p>";
        } else {
                if($hasSpecialChar == 0)
                {
                    echo "<p>The password '$Password' does not have a Special Char  (Bad).</p>";
                }
                if($hasNumber == 0)
                {
                    echo "<p>The password '$Password' does not have a Number  (Bad).</p>";
                }
                if($hasUpperCase == 0)
                {
                    echo "<p>The password '$Password' does not have a Upper Case Letter  (Bad).</p>";
                }
                if($hasLowerCase == 0)
                {
                    echo "<p>The password '$Password' does not have a Lower Case Letter  (Bad).</p>";
                }
                if(preg_match('/\s/', $Password))
                {
                    echo "<p>The password '$Password' has a space (Bad).</p>";
                }
                if(strlen($Password) < 12)
                {
                    echo "<p>The password '$Password' has too short.</p>";
                }
            }
        }
    }
    checkPassword($Passwords);
    ?>



</main>

<?php
require 'inc_footer.php';
?>

</body>
</html>
