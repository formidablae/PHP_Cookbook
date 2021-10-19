<?php
    $r = array();

    for ($i = 0, $j = count($data); $i < $j; $i++) {
        $r[$i] = unpack($format_string, $data[$i]);
    }

    return $r;
?>
