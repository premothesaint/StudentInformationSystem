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
        <a href="student.php">STUDENT PROFILE</a>
        <a href="courses.php">COURSES</a>
        <a href="contact.php">CONTACT US</a>
      </nav>
    </header>

    <section class="bgs">
      <div class="login-container">
        <div class="logoz">
          <img src="logo/Pangasinan_State_University_logo.png" alt="Logo" width="100">
        </div>
        <div class="login-form">
          <form action="login2.php" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Log In as Administrator</button>
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
        <a href="admin.php"><i class='bx bx-user'></i></a> 
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- custom js -->
    <script src="script.js"></script>
    
  </body>
</html>
