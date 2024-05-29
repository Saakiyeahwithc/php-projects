<?php
$celcius = readline("Enter the temprature to convert:");
if ($celcius > 0) {
    $farenhite = $celcius * 9 / 5 + 32;
    echo $celcius . " degree is equal to " . $farenhite . " farenhite.";
} else if ($celcius < 0) {
    echo "Temprature is below freezing(below 0 degree)";
}
