<?php
    try {
        $link = "$_SERVER[REQUEST_URI]";
        echo $link;
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>