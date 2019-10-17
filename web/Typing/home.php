<?php
    require "dbConnect.php";
    $db = get_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <?php
            $statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $book = $row['book'];
                $chapter = $row['chapter'];
                $verse = $row['verse'];
                $content = $row['content'];
                echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
            }
        ?>
    </body>
</html>