<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION["code"])) {
        header("Location: login_page.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <script src="Javascript/account.js"></script>

        <link rel="stylesheet" href="Css/main.css">
        <link rel="stylesheet" href="Css/content.css">
    </head>
    <body>
        <div class="content">
            <p id="error_message"></p>
            <textarea id="comment_box" placeholder="Leave Comment"></textarea>
            <button onclick="comment()">Submit</button>
            <?php
                $username = $_SESSION["username"];
                $code = $_SESSION["code"];

                // Get all comments the user has made
                $select_sql = "SELECT comment FROM Comments WHERE username='$username' AND code='$code';";
                foreach ($db->query($select_sql) as $row) {
                    echo $row["comment"] . "<br>";
                }
            ?>
            <br>
            <button onclick="logout()">Log Out</button>
        </div>
    </body>
</html>