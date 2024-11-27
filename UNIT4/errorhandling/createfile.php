<?php

$myfile = fopen("newfile1.txt", "a") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe2\n";
fwrite($myfile, $txt);
fclose($myfile);

?>