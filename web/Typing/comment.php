<?php
    try {
        require "../../db/dbConnect.php";

        $link = "$_SERVER[REQUEST_URI]";
        $rawData = explode("?q=", $link)[1];
        $splitVars = explode("&&", $rawData);

        $id = $splitVars[0];
        $splitData = explode("+", $splitVars[1]);
        $comment = implode(" ", $splitData);

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