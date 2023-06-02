<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

// Create a new connection instance
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $_GET['id'];

    // Construct the delete query
    $sql = "DELETE FROM student_tbl WHERE stu_id = '$id'";

    // Execute the delete query
    if ($conn->query($sql)) {
        header("Location: view.php");
    } else {
        echo "Error deleting data: " . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>