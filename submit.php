<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = "student_regs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $birth_date = $_POST["birth_date"];
    $phone_no = $_POST["pincode"];
    $email = $_POST["email"];
    $year = $_POST["state"];
    $course = $_POST["city"];
    $password = ($_POST["password"]);

    // Check if the email or phone_no already exists in the database
    $checkDuplicate = "SELECT id FROM student_registration WHERE email = '$email' OR phone_no = '$phone_no'";
    $result = $conn->query($checkDuplicate);

    if ($result->num_rows > 0) {
        // Error message
        echo '<div style="padding: 20px; background: linear-gradient(to right, rgba(0, 0, 0, 0.692) 10%, #0a29d8c0 50%, transparent);
                    backdrop-filter: blur(10px); color: #ffe047; text-align: center; font-family: Bahnschrift SemiBold;">
                    <p>Email or phone number already exists.</p>
                    <a href="registrationform.php"><button style="padding: 10px; background-color: #0a28d8; color: white; border: none; border-radius: 5px; cursor: pointer;">Go Back</button></a>
                </div>';

        // Stop further execution
        exit();
    } else {
        // Continue with the insertion
        $sql = "INSERT INTO student_registration (first_name, middle_name, last_name, address, gender, birth_date, phone_no, email, password, year, course)
        VALUES ('$first_name', '$middle_name', '$last_name', '$address', '$gender', '$birth_date', '$phone_no', '$email', '$password', '$year', '$course')";

        if ($conn->query($sql) === TRUE) {
            // Success message
            echo '<div style="padding: 20px; background: linear-gradient(to right, rgba(0, 0, 0, 0.692) 10%, #0a29d8c0 50%, transparent);
                    backdrop-filter: blur(10px); color: #ffe047; text-align: center; font-family: Bahnschrift SemiBold;">
                    <p>YOU ARE NOW REGISTERED!</p>
                    <a href="student.php"><button style="padding: 10px; background-color: #0a28d8; color: white; border: none; border-radius: 5px; cursor: pointer;">Continue</button></a>
                </div>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
