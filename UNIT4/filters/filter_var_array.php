<?php

$arr = array(
   "name" => "Michael",
   "age" => 100,
   "email" => "michael@gmail.com",
);

$filters = array(
   "name" => FILTER_SANITIZE_STRING,
   "age" => array("filter" => FILTER_VALIDATE_INT, "options" => array("min_range" => 1, "max_range" => 101)),
   "email" => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters));

?>