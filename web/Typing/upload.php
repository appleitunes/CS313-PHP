<?php
    try {
        if (isset($_POST["content_text"])) {
            $content = $_POST["content_text"];

            $sql = "INSERT INTO stories (title, story, author) VALUES ('test', '$content', 'test');";

            if ($db->query($sql) == TRUE) {
                echo "New story uploaded successfully";
            } else {
                echo "Error: Story not uploaded.";
            }

            $_POST = array();
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>