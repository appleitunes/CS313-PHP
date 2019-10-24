<?php
    $link = "$_SERVER[REQUEST_URI]";
    $rawData = explode("?q=", $link)[1];
    $splitVars = explode("&&", $rawData);

    $id = $splitVars[0];
    $splitData = explode("+", $splitVars[1]);
    $comment = implode(" ", $splitData);

    echo "$id <br> $comment";
?>