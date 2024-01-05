<?php
session_start(); // Start a PHP session

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the user using prepared statements
    $stmt = $conn->prepare("SELECT * FROM student_registration WHERE email = ?");
    
    // Check if the prepare statement was successful
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if ($password === $row["password"]) {
            // Authentication successful
            $_SESSION["user_email"] = $email;
            header("Location: ../STUDENT/studentinfos.php"); // Redirect to the successful login page
            exit();
        } else {
            // Invalid password
            $_SESSION["error_message"] = "Invalid password. Please try again.";
        }
    } else {
        // User not found
        $_SESSION["error_message"] = "User not found. Please check your email.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PSU Student Information System</title>
    <link rel="icon" href="logo/Pangasinan_State_University_logo.png">
    

    <!-- swiper css -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  

    <!-- box icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="studentprofile.css" />

  </head>

  <body>
    <!-- header design -->
    <header class="header">
      <a href="home.php" class="logo">
        <img src="logo/PSU-LABEL-LOGO.png" class="logo" alt="Logo">
      </a>

      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar">
        <a href="home.php">HOME</a>
        <a href="student.php" class="active">STUDENT PROFILE</a>
        <a href="courses.php">COURSES</a>
        <a href="contact.php">CONTACT US</a>
        
      </nav>
    </header>


<section class="bgs">

<div class="login-container">
        <div class="logoz">
            <img src="logo/Pangasinan_State_University_logo.png" alt="Logo" width="100">
        </div>
        <form class="login-form" method="POST" action="login.php">
        <input type="email" placeholder="Email" name="email" id="email" />
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit">Log In</button>
    </form>
    <div class="bgs_content">
    <h1>Log In to proceed... or<a href="registrationform.php"> &nbsp;<span class="enroll-text">Enroll now!</span></a></h1>
</div>
</div>




</section>



<footer class="footer">
      <div class="footer-text">
        <p>Copyright 2023 &copy; Pangasinan State University & MJ GUILLERMO | All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
      <a href="student.php"><i class='bx bx-up-arrow-alt'></i></a>
      <a href="admin.php"><i class='bx bx-user'></i></a> 
    </div>
    
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>

<!-- typed js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<!-- custom js -->
<script src="script.js"></script>

    <!-- Your existing HTML content -->

    <!-- Display error message if set -->
    <?php if (isset($_SESSION["error_message"])): ?>
        <script>
            alert("<?php echo $_SESSION['error_message']; ?>");
        </script>
        <?php unset($_SESSION["error_message"]); // Clear the error message after displaying ?>
    <?php endif; ?>

    <div class="login-container">
        <div class="logoz">
            <img src="logo/Pangasinan_State_University_logo.png" alt="Logo" width="100">
        </div>
        <div class="login-form">
            <form method="POST" action="">
                <input type="email" name="email" id="email" />
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>

    <!-- Your remaining HTML content -->

</body>
</html>
