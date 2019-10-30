<?php
    require "../Database/connect.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        $username = $_GET["username"];
        $password = $_GET["password"];
        $password2 = $_GET["password2"];

        // If the user's passwords match
        if ($password === $password2) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }
        else {
            throw new Exception("Passwords do not match.");
        }

        // If account with this username already exists
        $select_sql = "SELECT unique_id FROM Accounts WHERE username='$username';";
        foreach ($db->query($select_sql) as $row) {
            throw new Exception("User already exists.");
        }

        // Attempt to add new user
        $insert_sql = "INSERT INTO Accounts (username, pass) VALUES ('$username', '$hashed_password');";
        if ($db->query($insert_sql) == TRUE) {
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