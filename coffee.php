<?php
echo "1.Espresso \n2.Latte \n3.Cappuccinno \n4.Mocha \n";
$order = readline("Enter your choice to reveal prices: ");
switch ($order) {
    case 1:
        echo "Espresso is Rs.200";
        break;
    case 2:
        echo "Latte is Rs.250";
        break;
    case 3:
        echo "Cappuccino is Rs.120";
        break;
    case 4:
        echo "Mocha is Rs.350";
        break;
    default:
        echo "You've entered an invalid choice.";
}
