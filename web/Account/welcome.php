<?php
    if ($_SESSION["id"] == null) {
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

        <script src="Javascript/main.js"></script>
    </head>
    <body>
        <button id="logout()">Log Out</button>
    </body>
</html>