<?php
$link = mysqli_connect('localhost', 'root', "", "php1");
if ($link == false) {
    die("Could not connect" . mysqli_connect_error());
}

$sql = "SELECT COUNT(marks), SUM(marks) AS total_marks FROM students";

if ($result = mysqli_query($link, $sql)) {

    if ($row = $result->fetch_assoc()) {
        echo "Total Marks: " . $row['total_marks'];
        print_r($row);
    } else {
        echo "No records found.";
    }


    while ($row = mysqli_fetch_array($result)) {

        echo $row['COUNT(marks)'];

    }
} else {
    echo "Query could not be executed";
}


mysqli_close($link);
