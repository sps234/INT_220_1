<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php1";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

// Define the query
$sql = "SELECT id, first_name, last_name, email, city, marks FROM students";

// Execute the query
if ($result = $link->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<table border=2>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>first_name</th>";
        echo "<th>last_name</th>";
        echo "<th>email</th>";
        echo "<th>city</th>";
        echo "<th>marks</th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['marks'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}

// Close connection
$link->close();
?>