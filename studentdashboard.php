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
        <a href="student.php" class="active">STUDENT PROFILE > </a>
        <a href="studentinfos.php">STUDENT INFORMATION</a>
        <a href="courses.php">COURSES</a>
        <a href="contact.php">CONTACT US</a>
        
      </nav>
    </header>


<section class="bgs">

<button type="submit" class="delete-all-button">Delete All</button>




<div class="bgs_content">
    <form action="update_gender.php" method="post">
        <table border="1">
            <tr>
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
            </tr>

            <?php
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['middle_name'] . '</td>';
                echo '<td>' . $row['last_name'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                
                // Insert the modified code for the "Gender" column
                echo '<td>';
                echo '<div class="form-group">';
                echo '<label for="gender_' . $row['id'] . '" class="form-label">Gender:</label>';
                echo '<select name="gender_' . $row['id'] . '" id="gender_' . $row['id'] . '" class="form-select">';
                echo '<option value="Male" ' . ($row['gender'] == 'Male' ? 'selected' : '') . '>Male</option>';
                echo '<option value="Female" ' . ($row['gender'] == 'Female' ? 'selected' : '') . '>Female</option>';
                echo '</select>';
                echo '</div>';
                echo '</td>';
                
                echo '<td>' . $row['birth_date'] . '</td>';
                echo '<td>' . $row['phone_no'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['year'] . '</td>';
                echo '<td>' . $row['course'] . '</td>';
                
                // Add the edit link with a query parameter for the student ID
                echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
                
                echo '<td><a href="delete.php?id=' . $row['id'] . '" onclick="return confirm(\'Are you sure?\')">Delete</a></td>';
                echo '</tr>';
            }

            echo '</table>';
            ?>
            <button type="submit" class="update-gender-button">Update Gender</button>
    </form>
</div>

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