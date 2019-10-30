<?php
    try {
        require "../Database/connect.php";

        $_SESSION["id"] = null;
        echo "0";
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>