<?php
// Initialize the cart array and total cost
$cart = [];
$totalCost = 0.0;

// Function to display the current cart and total cost
function displayCart($cart, $totalCost)
{
    if (count($cart) > 0) {
        echo "Items in your cart:\n";
        foreach ($cart as $item) {
            echo "- " . $item['name'] . ": $" . number_format($item['price'], 2) . "\n";
        }
        echo "Total cost: $" . number_format($totalCost, 2) . "\n";
    } else {
        echo "Your cart is empty.\n";
    }
}

// Simulating a loop that keeps asking for user input until checkout
while (true) {
    // Display the current cart
    displayCart($cart, $totalCost);

    // Ask user for input
    echo "Enter an item name to add to your cart (or type 'checkout' to finish): ";
    $input = trim(fgets(STDIN));

    // Check if the user wants to checkout
    if (strtolower($input) == 'checkout') {
        break;
    }

    // Ask for the price of the item
    echo "Enter the price of the item: ";
    $price = (float)trim(fgets(STDIN));

    // Add the item to the cart
    $cart[] = ['name' => $input, 'price' => $price];
    $totalCost += $price;

    // Confirm the item has been added
    echo "Added '$input' to your cart at $" . number_format($price, 2) . ".\n\n";
}
// Final display of the cart and total cost
echo "\nCheckout complete!\n";
displayCart($cart, $totalCost);
