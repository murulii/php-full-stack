<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include environment variables
    include 'wenv.php';

    // Handle form submission
    $data = $_POST['data'];

    // Insert data into the database
    $sql = "INSERT INTO $table ($column) VALUES ('$data')";
    if ($conn->query($sql) === TRUE) {
        echo "Data added successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
