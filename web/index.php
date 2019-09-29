<?php
    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $rawData = explode("%%", $link)[1];
    $data = explode("&&", $rawData);
    $string = implode(" ", $data);
    echo $string;
?>