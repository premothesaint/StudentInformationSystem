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

    // Fetch the student data based on the ID
    $sql = "SELECT * FROM student_registration WHERE id = $studentId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Information</title>
    <link rel="icon" href="logo/Pangasinan_State_University_logo.png">
    <style>
        body {
            font-family: Arial, sans-serif;
                
            
        }
        .bg{
            background-image: url('BG.png');
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        
        select {
            width: calc(100% - 16px); /* Adjust the width as needed */
        }

        input[type="submit"] {
  background-color: #0a28d8;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s; /* Add a smooth transition effect */
}

input[type="submit"]:hover {
  background-color: gold; /* Change the background color on hover */
}
    </style>
</head>
<body>

<div class="form-header"><CENTER>
    <img src="logo/Pangasinan_State_University_logo.png" alt="Logo">
    <h2>UPDATE THE STUDENT INFORMATION</h2></CENTER>
</div>


<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    First Name: <input type="text" name="first_name" value="<?= $row['first_name'] ?>"><br>
    Middle Name: <input type="text" name="middle_name" value="<?= $row['middle_name'] ?>"><br>
    Last Name: <input type="text" name="last_name" value="<?= $row['last_name'] ?>"><br>
    Address: <input type="text" name="address" value="<?= $row['address'] ?>"><br>
    Gender: 
    <select name="gender">
        <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
        <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
    </select><br><br>
    Birth Date: <input type="text" name="birth_date" value="<?= $row['birth_date'] ?>"><br>
    Phone No.: <input type="text" name="pincode" value="<?= $row['phone_no'] ?>"><br>
    Email: <input type="text" name="email" value="<?= $row['email'] ?>"><br>
    Year: <input type="text" name="state" value="<?= $row['year'] ?>"><br>
    Course:
    <select name="city">
    <option value="Computer Science">Bachelor of Science in Computer Science</option>
    <option value="Information Technology">Bachelor of Science in Information Technology</option>
    <option value="Mathematics">Bachelor of Science in Mathematics</option>
    <option value="Pure Math">Major in Pure Math</option>
    <option value="Statistics">Major in Statistics</option>
    <option value="CIT">Major in CIT (Computer and Information Technology)</option>
    <option value="Hospitality Management">Bachelor of Science in Hospitality Management</option>
    <option value="Secondary Education">Bachelor of Secondary Education</option>
    <option value="Technical-Vocational Teacher Education">Bachelor of Technical-Vocational Teacher Education</option>
    <option value="Technology and Livelihood Education">Bachelor of Technology and Livelihood Education</option>
    <option value="Industrial Technology - Automotive Technology">Bachelor Industrial Technology - Major in Automotive Technology</option>
    <option value="Industrial Technology - Ceramics Technology">Bachelor Industrial Technology - Major in Ceramics Technology</option>
    <option value="Industrial Technology - Civil Technology">Bachelor Industrial Technology - Major in Civil Technology</option>
    <option value="Industrial Technology - Drafting Technology">Bachelor Industrial Technology - Major in Drafting Technology</option>
    <option value="Industrial Technology - Electrical Technology">Bachelor Industrial Technology - Major in Electrical Technology</option>
    <option value="Industrial Technology - Electronics Technology">Bachelor Industrial Technology - Major in Electronics Technology</option>
    <option value="Industrial Technology - Food Service Management">Bachelor Industrial Technology - Major in Food Service Management</option>
    <option value="Industrial Technology - Garments, Fashion and Design">Bachelor Industrial Technology - Major in Garments, Fashion and Design</option>
    <option value="Industrial Technology - Mechanical Technology">Bachelor Industrial Technology - Major in Mechanical Technology</option>
    <option value="English Language">Bachelor of Arts in English Language</option>
    <option value="Economics">Bachelor of Arts in Economics</option>
    <option value="Biology">Bachelor of Science in Biology</option>
    <option value="Nutrition and Dietetics">Bachelor of Science in Nutrition and Dietetics</option>
    <option value="Social Work">Bachelor of Science in Social Work</option>
    <option value="Public Administration">Bachelor of Public Administration</option>
    <option value="Business Administration - Financial Management">Bachelor of Science in Business Administration - Major in Financial Management</option>
    <option value="Business Administration - Operations Management">Bachelor of Science in Business Administration - Major in Operations Management</option>
    </select><br><br>
    <input type="submit" value="Update">
    <input type="button" value="Cancel" onclick="history.go(-1);">
</form>s
</form>

 

</body>
</html>

<?php
    } else {
        echo 'Student not found';
    }
}

$conn->close();
?>
