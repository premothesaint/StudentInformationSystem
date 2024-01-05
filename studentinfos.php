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
    <style> 
table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
  border: 1px solid #ddd; /* Add border to the table */
  overflow-x: auto; /* Enable horizontal scrolling */
}

th, td {
  border: 1px solid #ddd;
  padding: 4px; /* Reduce padding */
  text-align: left;
  font-size: 12px; /* Reduce font size */
}

th {
  background-color: #f2f2f2;
  color: #0a28d8;
}

div {
  text-align: center;
}


@media (max-width: 600px) {
  table {
    font-size: 2px; /* Further adjust font size for smaller screens */
  }
}
    </style>

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
        <a href="student.php" >STUDENT PROFILE > </a>
        <a href="studentinfos.php" class="active">STUDENT INFORMATION</a>
        <a href="courses.php">COURSES</a>
        <a href="contact.php">CONTACT US</a>
        
      </nav>
    </header>


<section class="bgs">
<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'student_regs';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM student_registration";
$result = $conn->query($sql);

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Phone No.</th>
            <th>Email</th>
            <th>Year</th>
            <th>Course</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['first_name'] . '</td>';
      echo '<td>' . $row['middle_name'] . '</td>';
      echo '<td>' . $row['last_name'] . '</td>';
      echo '<td>' . $row['address'] . '</td>';
      echo '<td>' . $row['gender'] . '</td>';
      echo '<td>' . $row['birth_date'] . '</td>';
      echo '<td>' . $row['phone_no'] . '</td>';
      echo '<td>' . $row['email'] . '</td>';
      echo '<td>' . $row['year'] . '</td>';
      echo '<td>' . $row['course'] . '</td>';
      
      // Add the edit link with a query parameter for the student ID
      echo '<td><a href="edit.php?id=' . $row['id'] . '" style="background-color: #0a28d8; color: #fff;">Edit</a></td>';
      
      echo '<td><a href="delete.php?id=' . $row['id'] . '" style="background-color: #fffb01; color: #000;" onclick="return confirm(\'Are you sure?\')">Delete</a></td>';
      echo '</tr>';
  }
    echo '</table>';
} else {
    echo 'No records found';
}

$conn->close();
?>

</div>
</section>



<footer class="footer">
      <div class="footer-text">
        <p>Copyright 2023 &copy; Pangasinan State University & MJ GUILLERMO | All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
      <a href="student.php"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>

<!-- typed js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<!-- custom js -->
<script src="script.js"></script>
  </body>
  
</html>