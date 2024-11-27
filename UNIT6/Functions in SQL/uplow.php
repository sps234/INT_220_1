<?php
$link = mysqli_connect('localhost', 'root', "", "php1");
if ($link == false) {
    die("Could not connect" . mysqli_connect_error());
}

$sql = "SELECT lcase(first_name) FROM students";

if ($result = mysqli_query($link, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
        // print_r($row);
        echo "<br>", $row['lcase(first_name)'];
        echo "<br>";

    }
} else {
    echo "Query could not be executed";
}


mysqli_close($link);
