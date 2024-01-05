<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'student_regs';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $studentId = $_POST['id'];
    $firstName = $_POST['first_name'];
    $middleName = $_POST['middle_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birth_date'];
    $phoneNo = $_POST['pincode'];
    $email = $_POST['email'];
    $year = $_POST['state'];
    $course = $_POST['city'];

    // Update the student data in the database
    $sql = "UPDATE student_registration SET
            first_name = '$firstName',
            middle_name = '$middleName',
            last_name = '$lastName',
            address = '$address',
            gender = '$gender',
            birth_date = '$birthDate',
            phone_no = '$phoneNo',
            email = '$email',
            year = '$year',
            course = '$course'
            WHERE id = $studentId";

    if ($conn->query($sql) === TRUE) {
        echo 'Record updated successfully';

        // Redirect to studentinfos.php
        header("Location: studentinfos.php");
        exit();
    } else {
        echo 'Error updating record: ' . $conn->error;
    }
}

$conn->close();
?>
