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
            foreach ($db->query('SELECT author, story, numRatings, totalRating FROM stories ORDER BY time DESC;') as $row) {
                $author = $row['author'];
                $story = $row['story'];
                $numRatings = $row['numRatings'];
                $rating = $numRatings == 0 ? 0 : $row['totalRating'] / $row['numRatings'];

                echo "$author - $story<br>$rating<br><br>";
            }
        ?>
    </body>
</html>