<!-- delete.php -->
<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'student_regs';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $studentId = $_GET['id'];

    // Delete the student data based on the ID
    $sql = "DELETE FROM student_registration WHERE id = $studentId";

    if ($conn->query($sql) === TRUE) {
        // Redirect to studentinfos.php after successful deletion
        header("Location: studentinfos.php");
        exit(); // Ensure no further code is executed
    } else {
        echo 'Error deleting student: ' . $conn->error;
    }
}

$conn->close();
?>
