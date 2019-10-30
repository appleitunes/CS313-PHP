<?php
    require "../Database/connect.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        $username = $_GET["username"];
        $password = password_hash($_GET["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO Accounts (username, pass) VALUES ('$username', '$password');";

        if ($db->query($sql) == TRUE) {
            $_SESSION["id"] = $db->lastInsertId();
            $_SESSION["username"] = $username;
            echo "0";
        }
        else {
            throw new Exception("Database error.");
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>