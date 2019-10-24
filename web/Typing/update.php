<?php
    require "../../db/dbConnect.php";

    try {
        if (isset($_POST["content_text"])) {
            $title = $_POST["title"];
            $content = str_replace("\n", "<br>", str_replace("'", "`", str_replace('"', "\"", $_POST["content_text"])));
            $author = $_POST["author"];
 
            $sql = "INSERT INTO stories (title, story, author) VALUES ('$title', '$content', '$author');";

            if ($db->query($sql) == TRUE) {
                echo "New story uploaded successfully";
            } else {
                echo "Error: Story not uploaded.";
            }

            /* Redirect browser */
            header("Location: main.php"); 
            exit();
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>