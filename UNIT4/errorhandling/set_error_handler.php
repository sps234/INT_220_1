<?php
//error handler function
function customError($errno, $errstr)
{
  echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
set_error_handler("customError");

$test = 2;
//trigger error
echo ($test);
?>