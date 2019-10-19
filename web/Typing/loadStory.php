<?php
    require "../../db/dbConnect.php";

    try {
        $link = "$_SERVER[REQUEST_URI]";
        $id = explode("?q=", $link)[1];

        foreach ($db->query("SELECT comment FROM Comment c WHERE c.story_id = '$id'") as $row) {
            $comment = $row["comment"];

            echo "- $comment<br>";
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>