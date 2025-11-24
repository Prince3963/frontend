<?php
session_start();

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get user input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $captcha_input = $_POST['captcha_input'];

    // Verify CAPTCHA
    if ($captcha_input != $_SESSION['captcha']) {
        die("Invalid CAPTCHA! Please go back and try again.");
    }

    // If CAPTCHA is correct, proceed
    // TODO: Call Node.js API to register user via PHP (we will do via cURL / AJAX)
    echo "CAPTCHA Verified Successfully!<br>";
    echo "User can now be registered via API.";
}
?>
