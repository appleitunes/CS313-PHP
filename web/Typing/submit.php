<!DOCTYPE html>
<html>
    <head>
        <title>Submit Story</title>
    </head>
    <body>
        <form action="update.php" method="post">
            <input name="author" type="text" placeholder="Author">
            <br>
            <input name="title" type="text" placeholder="Title">
            <br>
            <textarea name="content_text"><?php echo $_POST["content_text"]; ?></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>