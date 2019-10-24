<?php
    $link = "$_SERVER[REQUEST_URI]";
    $rawData = explode("?q=", $link)[1];
    $splitData = explode("+", $rawData);
    $data = implode(" ", $splitData);

    echo $data;
?>