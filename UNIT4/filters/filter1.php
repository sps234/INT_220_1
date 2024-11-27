<?php
//sanitize string
$str = "a";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
// echo $newstr;
if (filter_var($str, FILTER_VALIDATE_INT)) {
  echo "Valid";
} else {
  echo "not valid";
}
// echo $newstr;
// echo "<br>";
