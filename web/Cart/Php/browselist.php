<?php
    $items = array(
        "bulbasaur", 
        "squirtle", 
        "charmander", 
        "caterpie", 
        "weedle",
        "pikachu",
        "eevee",
        "cyndaquil",
        "bidoof"
    );

    foreach ($items as $item) {
        echo "<form action='browse.php' method='POST'>";
        echo "<button class='item' type='submit' name='item' value='" . $item . "'>";
        echo "<div class='confirm' id='" . $item . "'>" . ($_SESSION["items"][$item] ? "Remove" : "Add") . "</div>";
        echo "<img src='Images/" . $item . ".png'>";
        echo "<div class='name'>" . ucwords($item) . "</div>";
        echo "<p>Add to cart: ¥" . strlen($item) . "0,000</p>";
        echo "</button>";
        echo "</form>";
    }
?>