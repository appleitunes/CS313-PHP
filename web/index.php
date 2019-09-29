<?php
    try {
        $link = "$_SERVER[REQUEST_URI]";
        $rawData = explode("?q=", $link)[1];
        $splitData = explode("+", $rawData);
        $data = implode(" ", $splitData);

        for ($i = 0; $i < sizeof($data); $i++) {
            if (rand(0,1) == 1) {
                $data[$i] = strtoupper($data[$i]);
            }
            else {
                $data[$i] = strtolower($data[$i]);
            }
        }

        echo $data;
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>