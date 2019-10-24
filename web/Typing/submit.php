<!DOCTYPE html>
<html>
    <head>
        <title>Submit Story</title>
        <link rel="stylesheet" href="css/submit.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" type="image/png" href="images/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <h1>Submit Story</h1>
            <form action="update.php" method="post" accept-charset="UTF-8">
                <input name="author" type="text" placeholder="Author">
                <br><br>
                <input name="title" type="text" placeholder="Title">
                <br><br>
                <textarea name="content_text"><?php echo $_POST["content_text"]; ?></textarea>
                <br><br>
                <button type="submit">Submit</button>
            </form>
            <br><br>
            <a href="main.php"><button>Back</button></a>
        </div>
    </body>
</html>