<?php
//Challenge 1: Fahrenheit to Celsius
//Formula for Fahrenheit to Celsius : C = (F - 32) * 5/9

//Normal Function
/* 
function fahrenheitToCelsius($fahrenheit)
    {
        return number_format(($fahrenheit - 32) * 5/9, 2); //rounds to 2 decimal point
    } 

    $fahrenheit = 69.69;
    $celsius = fahrenheitToCelsius($fahrenheit);

    echo "Fahrenheit: $fahrenheit&deg;F = Celsius: $celsius&deg;C";
 */

//Arrow function

$fahrenheitToCelsius = fn($fahrenheit) => number_format(($fahrenheit - 32) * 5 / 9, 2);

    $fahrenheit = 69.69;
    $celsius = $fahrenheitToCelsius($fahrenheit);

    echo "Fahrenheit: $fahrenheit&deg;F = Celsius: $celsius&deg;C";

?>
