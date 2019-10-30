<?php
    require "../Database/connect.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        $_SESSION["id"] = null;
        echo "0";
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>