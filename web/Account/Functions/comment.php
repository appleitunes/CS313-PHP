<?php
    require "../Database/connect.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        $id = $_SESSION["id"];
        $code = $_SESSION["code"];
        $comment = $_GET["comment"];

        // Attempt to add new comment
        $insert_sql = "INSERT INTO Comments (account_id, account_code, comment) VALUES ('$id', '$code', '$comment');";
        if ($db->query($insert_sql) == TRUE) {
            echo "Very Nice";
        }
        else {
            throw new Exception("Database error.");
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>