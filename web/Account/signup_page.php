<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION["code"])) {
        header("Location: welcome.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>

        <script src="Javascript/account.js"></script>

        <link rel="stylesheet" href="Css/main.css">
        <link rel="stylesheet" href="Css/account.css">
    </head>
    <body>
        <div class="log_info">
            <h1>Sign Up</h1>
            <p id="error_message"></p>
            <input id="username" placeholder="Username">
            <br><br>
            <input type="password" id="password" placeholder="Password">
            <br><br>
            <input type="password" id="password2" placeholder="Confirm Password">
            <br><br>
            <button onclick="signup()">Sign Up</button>
            <br><br>
            <a href="login_page.php">Login</a>
        </div>
    </body>
</html>