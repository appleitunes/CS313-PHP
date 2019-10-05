<?php
    $total = 0;
    foreach ($_SESSION["items"] as $key => $value) {
        echo "<form action='cart.php' method='POST'>";
        echo "<span class='name'>" . ucwords($key) . "\t¥" . strlen($key) . "0,000</span>";
        echo "\t<button class='item' type='submit' name='item' value='" . $key . "'>Remove</button>";
        echo "</form>";
        $total += strlen($key);
    }
    echo "<hr>\tTotal: ¥" . $total . "0,000";
    if ($total !== 0) {
        echo "<br><a href='checkout.php' id='check-out'>";
        echo "<button>Check Out</button>";
        echo "</a>";
    }
?>