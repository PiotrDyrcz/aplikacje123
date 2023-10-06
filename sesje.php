<?php
    session_start();

    echo 'Welcome to page #1';

    $_SESSION['favcolor'] = 'blue';
    $_SESSION['animal'] = 'dog';
    $_SESSION['time'] = time();

    echo '<br/><a href="sesje2.php">Page2</a>';
?>