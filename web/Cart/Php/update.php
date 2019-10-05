<?php
    session_start();

    if (!$_SESSION["items"]) $_SESSION['items'] = array();

    if (!$_SESSION["items"][$_POST["item"]]) {
        $_SESSION["items"][$_POST["item"]] = true;
    }
    else {
        unset($_SESSION["items"][$_POST["item"]]);
    }

    foreach ($_SESSION["items"] as $key => $value) {
        if ($key === "" || !$key) {
            unset($_SESSION["items"][$key]);
        }
    }
?>