<?php
    $old_string = "Some example string";
    $new_substring = "Another text";
    $start = 5;

    // Everything from position $start to the end of $old_string
    // becomes $new_substring
    $new_string = substr_replace($old_string, $new_substring, $start);
    print $new_string;
    print "\n";

    $length = 13;

    // $length characters, starting at position $start, become $new_substring
    $new_string = substr_replace($old_string, $new_string, $length);
    print $new_string;
?>
