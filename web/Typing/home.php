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
        <h1>This is a test</h1>
        <?php
            $storyID = null;

            foreach ($db->query('SELECT title, story, author FROM stories;') as $row) {
                $title = $row['title'];
                $story = $row['story'];
                $author = $row['author'];

                echo "<strong>$author</strong>";
                echo "<br>$story";
            }

            foreach ($db->query("SELECT rating, comment FROM Reviews r WHERE r.story_id = '$storyID'") as $row) {
                $rating = $row["rating"];
                $comment = $row["comment"];

                echo "$comment<br>";
            }
        ?>
    </body>
</html>