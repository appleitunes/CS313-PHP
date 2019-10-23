<?php
    $content = $_post["text_area"];

    if ($content) {
        $sql = "INSERT INTO scriptures (title, story, author) VALUES ('test', '$content', 'test');";

        if ($db->query($sql) == TRUE) {
            echo "New story uploaded successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }
?>