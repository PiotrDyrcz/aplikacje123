<?php
$myfile=fopen("nowy-plik-2.txt", "w")
            or die("Unable to open file");
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>