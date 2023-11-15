<?php
// Include environment variables
include 'renv.php';

// Retrieve data from the database
$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo $row[$column] . "<br>";
    }
} else {
    echo "No data found";
}

// Close the database connection
$conn->close();
?>
