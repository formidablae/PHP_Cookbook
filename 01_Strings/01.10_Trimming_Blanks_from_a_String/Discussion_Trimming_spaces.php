<?php
    // Remove numerals and space from the beginning of the line
    print ltrim('10 PRINT A$', ' 0..9')."\n";

    // Remove semicolon from the end of the line
    print rtrim('SELECT * FROM turtles;', ';');
?>
