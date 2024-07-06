<?php
function fahrenheitToCelsius($fahrenheit) {
    $celsius = ($fahrenheit - 32) * 5 / 9;
    return $celsius;
}


$fahrenheit = 100.6;
$celsius = fahrenheitToCelsius($fahrenheit);
echo "$fahrenheit Fahrenheit is equal to $celsius Celsius.";
?>
