<?php
    require "../Database/connect.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        unset($_SESSION["id"]);
        echo "Maybe";
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>