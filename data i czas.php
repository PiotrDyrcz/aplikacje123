<?php
    $czas = mktime(11, 14, 54, 5, 6, 2024 );
    echo "Created date is ".date("d.m.Y h:i:sa", $czas );
    $now = time();
    $week = 100*24*60*60;
    echo "<br> teraz: ".date("d.m.Y h:i:sa", $czas -$week );
?>