<?php
// Database connection details
$host = getenv('rhost');
$username = getenv('ruser');
$password = getenv('rpass');
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
