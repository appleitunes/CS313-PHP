<?php
    if (isset($_SESSION["id"])) {
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
        Password: <input id="password">
        <br>
        <button onclick="login()">Log In</button>
        <button onclick="signup()">Sign Up</button>
    </body>
</html>