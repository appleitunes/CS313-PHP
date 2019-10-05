<?php require("Php/update.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Confirmation</title>
        <link rel="stylesheet" href="Css/checkout.css">
        <link rel="icon" type="image/png" href="Images/pokeball.png">
    </head>
    <body> 
        <h1 style="text-align:center;">PokéMart</h1>
        <hr><br>
        <div class="container">
            <?php
                foreach ($_SESSION["items"] as $key => $value) {
                    unset($_SESSION["items"][$key]);
                }
                echo $_POST["name"] . ", your package has been shipped to <br>";
                echo $_POST["city"] . ", " . $_POST["state"];
            ?>
            <hr>
            <a href="browse.php" id="check-out">
                <button>Return</button>
            </a>
        </div>
    </body>
</html>