<?php

$file = fopen("f1.txt", "r+") or die("unable to open the file");
echo fread($file, filesize("f1.txt"));
$text = "Welcome to LPu";
fwrite($file, $text);
fclose($file);


