<?php
$age = readline("Enter your age: ");
if ($age >= 18) {
    echo "You are eligible to vote.\n";
} else if ($age < 18) {
    echo "You are not eligible to vote.\n";
}
