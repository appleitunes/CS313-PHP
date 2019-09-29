<?php
    try {
        $link = "$_SERVER[REQUEST_URI]";
        $rawData = explode("?q=", $link)[1];
        $splitData = explode("+", $rawData);
        $data = implode(" ", $splitData);
        echo $link;
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>