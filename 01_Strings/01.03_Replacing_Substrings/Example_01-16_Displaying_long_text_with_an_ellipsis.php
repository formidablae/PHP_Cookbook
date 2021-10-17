<?php
    $r = mysqli_query($mysql, "SELECT id, message FROM messages WHERE id = $id") or die();
    $ob = mysqli_fetch_object($r);
    printf('<a href="more-text.php?id=%d">%s</a>',
        $ob->id,
        substr_replace($ob->message, ' ...', 25)
    );
?>
