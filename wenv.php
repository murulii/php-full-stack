<?php
// Database connection details
$host = getenv('whost');
$username = getenv('wuser');
$password = getenv('wpass');
$database = 'muruli';
$table = 'data';
$column = 'first';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
