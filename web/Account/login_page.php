<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if ($_SESSION["id"] != null) {
        header("Location: welcome.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <script src="Javascript/account.js"></script>

        <link rel="stylesheet" href="Css/account.css">
    </head>
    <body>
        <div class="log_info">
            <p id="error_message"></p>
            <input id="username" placeholder="Username">
            <br>
            <input type="password" id="password" placeholder="Password">
            <br>
            <button onclick="login()">Log In</button>
            <br>
            <a href="signup_page.php">Sign Up</a>
        </div>
    </body>
</html>