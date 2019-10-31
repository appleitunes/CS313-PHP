<?php
    require "../Database/connect.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        $username = $_GET["username"];
        $password = $_GET["password"];

        // Get the password and id of the item that matches this username
        $select_sql = "SELECT unique_id, pass, code FROM Accounts WHERE username='$username';";
        foreach ($db->query($select_sql) as $row) {

            // If the password in the database matches the inputted password
            if (password_verify($password, $row["pass"])) {
                $_SESSION["username"] = $username;
                $_SESSION["code"] = $row["code"];
                echo "0";
            }
        }

        if (!isset($_SESSION["id"])) {
            throw new Exception("No username matches this password.");
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>