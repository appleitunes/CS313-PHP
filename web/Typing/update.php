<?php
    require "../../db/dbConnect.php";

    try {
        if (isset($_POST["content_text"])) {
            $title = $_POST["title"];
            $content = nl2br(htmlspecialchars(str_replace("'", "`", str_replace('"', "\"", $_POST["content_text"]))));
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
        else {
            echo "Failed to upload.";
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>