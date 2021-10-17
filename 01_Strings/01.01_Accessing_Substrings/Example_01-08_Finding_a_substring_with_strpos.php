<?php
    $_POST = array();
    $_POST['email'] = 'user mail.com';
    if (strpos($_POST['email'], '@') === false) {
        print 'There was no @ in the e-mail address!';
    }
?>