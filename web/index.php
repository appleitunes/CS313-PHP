<?php
    try {
        // $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // $rawData = explode("%%", $link)[1];
        // $splitData = explode("&&", $rawData);
        // $data = implode(" ", $splitData);
        // echo $link;
        echo "$_SERVER[REQUEST_URI]";
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>