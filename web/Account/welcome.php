<?php
    require "Database/connect.php";

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION["code"])) {
        header("Location: login_page.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>

        <script src="Javascript/account.js"></script>

        <link rel="stylesheet" href="Css/main.css">
        <link rel="stylesheet" href="Css/account.css">
    </head>
    <body>
        <div class="log_info">
            <button onclick="logout()">Log Out</button>
            <br><br>
            <?php
                $username = $_SESSION["username"];
                echo "<h1>Hello, $username!</h1>";
                echo "<p>Free Hong Kong</p>";
            ?>
        </div>
    </body>
</html>