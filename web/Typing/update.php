<?php
    try {
        if (isset($_POST["content_text"])) {
            $title = $_POST["title"];
            $content = $_POST["content_text"];
            $author = $_POST["author"];

            echo "$title<br>$content<br>$author";

            // $sql = "INSERT INTO stories (title, story, author) VALUES ('$title', '$content', '$author');";

            // if ($db->query($sql) == TRUE) {
            //     echo "New story uploaded successfully";
            // } else {
            //     echo "Error: Story not uploaded.";
            // }

            // /* Redirect browser */
            // header("Location: main.php"); 
            // exit();

        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>