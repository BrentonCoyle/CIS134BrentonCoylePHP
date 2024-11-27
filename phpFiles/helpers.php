
<!--Apparently this is a good file setup? I looked it up and haveing a file dedicated to functions is cool.-->
<?php
function candles($candleName, $candlePrice){
    $txt = "";
    $len = count($candleName);
    for($i = 0; $i < $len; $i++){

        $txt = $txt."Name: $candleName[$i]<br> Price: $candlePrice[$i].<br><br>";
    }
    return $txt;
}
?>