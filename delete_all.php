<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'student_regs';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete all records
$sql = "DELETE FROM student_registration";
if ($conn->query($sql) === TRUE) {
    echo 'All records deleted successfully';
} else {
    echo 'Error deleting records: ' . $conn->error;
}

$conn->close();
?>