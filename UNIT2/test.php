<?php

$arr = [1, 2, 3, 4];

print_r($arr);
function ele(&$arr, $in)
{
    unset($arr[$in]);
}

echo "<br>";
ele($arr, 2);

print_r($arr);


?>