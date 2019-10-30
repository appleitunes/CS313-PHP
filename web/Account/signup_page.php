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

        <script src="Javascript/main.js"></script>
    </head>
    <body>
        Username: <input id="username">
        <br>
        Password: <input type="password" id="password">
        <br>
        Confirm Password: <input type="password" id="password2">
        <br>
        <button onclick="signup()">Sign Up</button>
        <br>
        <a href="login_page.php">Login</a>
    </body>
</html>