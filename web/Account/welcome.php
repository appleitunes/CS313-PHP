<?php
    require "Database/connect.php";

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
            <button onclick="logout()">Log Out</button>
            <p id="error_message"></p>
            <br><br>
            <input type="text" id="comment_box" placeholder="Leave Comment">
            <button onclick="comment()">Submit</button>
            <br>
            <div id="comments">
                <?php
                    $id = $_SESSION["id"];
                    $code = $_SESSION["code"];

                    // Get all comments the user has made
                    $select_sql = "SELECT comment FROM Comments WHERE account_id=$id AND account_code='$code';";
                    foreach ($db->query($select_sql) as $row) {
                        echo "<br>" . $row["comment"] . "<br>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>