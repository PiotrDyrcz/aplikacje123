<?php
    $czas = mktime(11, 14, 54, 5, 6, 2024 );
    echo "Created date is ".date("d.m.Y h:i:sa", $czas );
    $now = time();
    $week = 100*24*60*60;
    echo "<br> teraz: ".date("d.m.Y h:i:sa", $czas -$week );

    // echo "Today is " . date("h:i:sa");

    // $czas = mktime(11, 14, 54, 8, 12, 2014 );
    // $now = time();
    // $week = 7*24*60*60;
    // echo "<br> teraz: ".date("d.m.Y h:i:sa", $now +$week );

     // echo "Today is " . date("Y/m/d") . "<br>";
     //    echo "Today is " . date("Y.m.d") . "<br>";
     //    echo "Today is " . date("Y-m-d") . "<br>";
     //    echo "Today is " . date("l") . "<br>";
?>
