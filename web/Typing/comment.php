<?php
    try {
        require "../../db/dbConnect.php";

        $id = $_GET["id"];
        $comment = $_GET["comment"];

        $sql = "INSERT INTO Comment (comment, story_id) VALUES ('$comment', $id);";

        if ($db->query($sql) == TRUE) {
            echo "1";
        } else {
            echo "Error";
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>