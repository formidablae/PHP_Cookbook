<?php
    $s = "Some text";
    $reversed_s = implode(' ', array_reverse(explode(' ', $s)));
    print $reversed_s;
?>
