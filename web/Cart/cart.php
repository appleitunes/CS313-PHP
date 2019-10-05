<?php require("Php/update.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Browse</title>
        <link rel="stylesheet" href="Css/checkout.css">
    </head>
    <body>
        <h1 style="text-align:center;">Pokémon Center</h1>
        <hr><br>
        <div class="container">
            <a href="browse.php" id="check-out">
                <button>Back</button>
            </a>
            <div id="cart">
                <?php require("Php/cartlist.php") ?>
            </div>
        </div>
    </body>
</html>