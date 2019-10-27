<?php 
    require "../../db/dbConnect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Most Dangerous Typing Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/popup.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/selection.css">
        <link rel="stylesheet" href="css/typing.css">

        <script src="js/content.js"></script>
        
        <link rel="icon" type="image/png" href="images/logo.png">
    </head>
    <body>
        <div id="dark">
            <div id="popup">
                <img src="images/cancel.png" id="cancel">
                <h1 id="popup_title" style="text-align: center;"></h1>
                <p id="popup_author" style="text-align: center;"></p>
                <div id="popup_story"></div>
                <hr>
                <div id="comment_container">
                    <textarea maxlength="254" id="comment_area" placeholder="Comment"></textarea>
                    <button onclick="comment()">Post</button>
                </div>
                <hr>
                <div id="popup_comments"></div>
            </div>
        </div>

        <div id="container">

            <!-- Menu -->
            <div id="menu_area">
                <div class="child">
                    <h1>The World's Most <span class="emphasis">Dangerous</span> Typing Test</h1>
                    <h4>Don’t stop typing, or all progress will be lost.</h4>
                    <br>
                    <button onclick="startTyping()" class="blue_button">Start Typing</button>
                    <br>
                    <p id="message">You failed. <a href="javascript:startTyping()">Try again?</a></p>
                </div>

                <div id="stories">
                    <h1>Stories</h1>

                    <?php
                        $storyID = null;

                        foreach ($db->query('SELECT story_id, title, story, author FROM stories;') as $row) {
                            $id = $row['story_id'];
                            $title = $row['title'];
                            $story = $row['story'];
                            $author = $row['author'];

                            echo "<div class='story' id='story$id' onclick=\"display('$id')\">";
                            echo "<div class='title'>$title</div>";
                            echo "<div class='author'>$author</div>";
                            echo "<br>";
                            echo "<div class='preview'>$story</div>";
                            echo "</div>";
                            echo "<br>";
                        }
                    ?>
                </div>
            </div>
            <div id="content_area">
                <h3>Time remaining: <span id="count_down">0:00</span></h3>
                <div id="warning_context"><span id="warning"></span> seconds until failure</div>
                <br>
                <form action="submit.php" method="post">
                    <textarea id="content_text" name="content_text" placeholder="Start typing to begin..."></textarea>                
                    <br>
                    <button type="submit" class="blue_button">Upload</button>
                </form>
                <button onclick="stopTyping()" class="gray_button">Back</button>
                <button onclick="finish()" class="red_button" id="stop_button">Stop</button>
            </div>

        </div>
    </body>
</html>