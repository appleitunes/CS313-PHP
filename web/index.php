<?php
    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $rawData = explode("%%", $link);
    // $data = explode("&&", $rawData);
    echo $rawData;
?>