<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "php1");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO students (first_name, last_name, email, city, marks)
VALUES ('Satya', 'Krishnan', 'satya@gmail.com', 'Goa', 77);";

if (mysqli_query($link, $sql)) {
    echo "Records inserted successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>