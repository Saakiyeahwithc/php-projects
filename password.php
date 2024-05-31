<?php
session_start();

$correctpass = "PotatoFanny123";
$max_attempts = 5;

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}
if (isset($_SERVER['REQUEST_METHOD'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_SESSION['attempts']++;

        $user_pass = isset($_POST['password']) ? $_POST['password'] : "default";

        if ($user_pass === $correctpass) {
            echo "Access Granted";
            $_SESSION['attempts'] = 0;
        } else {
            if ($_SESSION['attempts'] >= $max_attempts) {
                echo " Maximum attempts exceeded. Access denied";
            } else {
                echo "Incorrect password. Attempt " . $_SESSION['attempts'] . " of $max_attempts.";
            }
        }
    }
}
