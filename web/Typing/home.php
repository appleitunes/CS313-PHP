<?php
    require "../../db/dbConnect.php";
?>

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
            foreach ($db->query('SELECT author, story FROM stories;') as $row) {
                $author = $row['author'];
                $story = $row['story'];

                echo "$author - $story";
            }
        ?>
    </body>
</html>