<?php

// $var = "a@gmail.com";
$var = 34;
var_dump(filter_var($var, FILTER_VALIDATE_EMAIL));

?>