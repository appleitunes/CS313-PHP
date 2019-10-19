<?php
    require "../../db/dbConnect.php";

    try {
        $link = "$_SERVER[REQUEST_URI]";
        $id = explode("?q=", $link)[1];

        foreach ($db->query("SELECT rating, comment FROM Reviews r WHERE r.story_id = '$id'") as $row) {
            $rating = $row["rating"];
            $comment = $row["comment"];

            echo "$comment<br>";
        }

        echo $id;
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>