<?php
/*
Develop a PHP program for an online store. If a user's cart total is over $100, apply a
10% discount; if it's over $50, apply a 5% discount; otherwise, no discount. Display the
final amount to be paid.
*/
$cartTotal = 55;

function cartDiscount($cartTotal)
{
    if ($cartTotal > 100) {
        $discountedTotal = $cartTotal * 0.9;
        return "The amount to be paid is $" . $discountedTotal;
    } elseif ($cartTotal > 50) {
        $discountedTotal = $cartTotal * 0.05;
        return "The amount to be Paid is $" . $discountedTotal;
    } elseif ($cartTotal)
        return "No vaild discount available.";
}

echo cartDiscount($cartTotal);
