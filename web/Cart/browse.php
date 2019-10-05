<?php require("Php/update.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Browse</title>
        <link rel="stylesheet" href="Css/checkout.css">
        <link rel="icon" type="image/png" href="Images/pokeball.jpeg">
    </head>
    <body>
        <h1 style="text-align:center;">Pokémon Center</h1>
        <hr><br>
        <div class="flex">
            <div class="grid">
                <?php require "Php/browselist.php"; ?>
            </div>
        </div>
        <div class="container2">
            <br><hr><br>
            <a href="cart.php" id="check-out">
                <button>View Cart</button>
            </a>
            <br>
            <a href="../assignments.html" id="check-out">
                <button>Home</button>
            </a>
        </div>
    </body>
</html>