<?php
    require "../Database/connect.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        unset($_SESSION["username"]);
        unset($_SESSION["code"]);
        echo "0";
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>