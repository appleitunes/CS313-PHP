<?php
    try {
        require "../Database/connect.php";

        $username = $_GET["username"];
        $password = $_GET["password"];

        $sql = "INSERT INTO Accounts (username, pass) VALUES ('$username', $password);";

        if ($db->query($sql) == TRUE) {
            $_SESSION["id"] = $db->insert_id;
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