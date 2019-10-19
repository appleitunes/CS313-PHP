<?php
    try {
        $link = "$_SERVER[REQUEST_URI]";
        $id = explode("?q=", $link)[1];
        echo $id;
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>