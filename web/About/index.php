<?php
    try {
        $link = "$_SERVER[REQUEST_URI]";
        $rawData = explode("?q=", $link)[1];
        $splitData = explode("+", $rawData);
        $data = implode(" ", $splitData);

        $data = str_split(strtolower($data));
        foreach ($data as &$char) {
            if (rand(0, 1)) $char = strtoupper($char);
        }
        echo implode("", $data);
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>