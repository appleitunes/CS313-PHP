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
        <title>Login</title>

        <script src="Javascript/account.js"></script>

        <link rel="stylesheet" href="Css/main.css">
        <link rel="stylesheet" href="Css/account.css">
    </head>
    <body>
        <div class="log_info">
            <h1>Login</h1>
            <p id="error_message"></p>
            <input id="username" placeholder="Username" maxlength="63">
            <br><br>
            <input type="password" id="password" placeholder="Password" maxlength="63">
            <br><br>
            <button onclick="login()">Log In</button>
            <br><br>
            <a href="signup_page.php">Sign Up</a>
        </div>
    </body>
</html>