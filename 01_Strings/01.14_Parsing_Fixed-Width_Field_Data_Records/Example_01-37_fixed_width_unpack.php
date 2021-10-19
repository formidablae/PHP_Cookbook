<?php
    function fixed_width_unpack($format_string, $data) {
        $r = array();

        for ($i = 0, $j = count($data); $i < $j; $i++) {
            $r[$i] = unpack($format_string, $data[$i]);
        }

        return $r;
    }
?>
