<?php
session_start();

// Simple Text CAPTCHA generate
$captcha = rand(10000, 99999);  // 5 digit random number
$_SESSION['captcha'] = $captcha;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Register</h1>
    <form id="registerForm" method="POST" action="verify_register.php">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="number" name="age" placeholder="Age" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <p>Enter this CAPTCHA: <b><?php echo $captcha; ?></b></p>
    <input type="text" name="captcha_input" placeholder="Enter Captcha" required><br>

    <button type="submit">Register</button>
</form>

    <p>Already have an account? <a href="login.php">Login here</a></p>

    <script src="js/main.js"></script>
</body>
</html>
