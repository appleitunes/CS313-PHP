<?php
    require "../Database/connect.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        $username = $_GET["username"];
        // $password = $_GET["password"];
        $password = password_hash($_GET["password"], PASSWORD_DEFAULT);

        // Get the password and id of the item that matches this username
        $sql = "SELECT pass, unique_id FROM Accounts WHERE username='$username';";

        foreach ($db->query($sql) as $row) {

            // If the password in the database matches the inputted password
            if (password_verify($password, $row["pass"])) {
                $_SESSION["id"] = $row["unique_id"];
                echo "0";
                return;
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