
$colors = array("red", "blue", "green");
for ($x = 1; $x <= 10; $x++) {
    echo "<div style='color:" . $colors[$x % 3] . ";'>Hello</div>";
}