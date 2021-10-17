<?php
    $string = "This is an example string";
    $start = 8;
    $length = 10;
    $substring = substr($string, $start, $length);
    print $substring;
    print "\n";

    $_GET = array();
    $_GET['username'] = "myfancyusername";
    $username = substr($_GET['username'], 0, 8);
    print $username;
?>
