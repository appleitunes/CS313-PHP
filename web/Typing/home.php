<?php require "../../db/dbConnect.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Scriptures</title>
    </head>
    <body>
        <h1>Scripture Resources</h1>
        <?php
            $storyID = null;

            foreach ($db->query('SELECT story_id, author, story FROM stories;') as $row) {
                $storyID = $row['story_id'];
                $author = $row['author'];
                $story = $row['story'];

                echo "<strong>$author</strong>";
                echo "<br>$story";
            }

            foreach ($db->query("SELECT rating, comment FROM Reviews r WHERE r.story_id = '$storyID'") as $row) {
                $comment = $row['comment'];

                echo "$comment";
            }
        ?>
    </body>
</html>