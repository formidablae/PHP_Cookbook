<?php
    $sales = array( array('Northeast', '2005-01-01', '2005-02-01', 12.54),
        array('Northwest', '2005-01-01', '2005-02-01', 546.33),
        array('Southeast', '2005-01-01', '2005-02-01', 93.26),
        array('Southwest', '2005-01-01', '2005-02-01', 945.21),
        array('All Regions', '--', '--', 1597.34),
    );

    ob_start();
    $fh = fopen('php://output', 'w') or die("Can't open php://output");
    foreach ($sales as $sales_line) {
        if (fputcsv($fh, $sales_line) === false) {
            die("Can't write CSV file");
        }
    }
    fclose($fh) or die("Can't close php://output");
    $output = ob_get_contents();
    ob_end_clean();
?>
