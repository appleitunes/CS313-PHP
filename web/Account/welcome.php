<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION["id"])) {
        header("Location: login_page.php"); 
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

        <link rel="stylesheet" href="Css/main.css">
        <link rel="stylesheet" href="Css/content.css">
    </head>
    <body>
        <div class="content">
            <?php
                $username = $_SESSION["username"];
                echo "Hello, $username!";
            ?>
            <br>
            <button onclick="logout()">Log Out</button>
        </div>
    </body>
</html>