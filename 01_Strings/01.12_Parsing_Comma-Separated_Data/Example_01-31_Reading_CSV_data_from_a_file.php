<?php
    $filename = "./../path/to/file.csv";
    $fp = fopen($filename, 'r') or die("can't open file");

    print"<table>\n";
    while ($csv_line = fgetcsv($fp)) {
        print '<tr>';
        for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
            print '<td>'.htmlentities($csv_line[$i]).'</td>';
        }
        print "</table>\n";
        fclose($fp) or die("can't close file");
    }
?>
