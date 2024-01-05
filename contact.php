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
    <link rel="stylesheet" href="style3.css" />
    <style>
   

    form {
      max-width: 600px;
      margin: 50px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .input-box {
      display: flex;
      justify-content: space-between;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    textarea {
      width: 48%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    textarea {
      width: 100%;
    }

    input[type="submit"] {
      background-color: #0a28d8;
      color: #fff;
      padding: 10px 15px;
      border: none;
      
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #0a28d8;
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
        <a href="student.php">STUDENT PROFILE</a>
        <a href="courses.php">COURSES</a>
        <a href="contact.php" class="active">CONTACT US</a>
        
      </nav>
    </header>


    <section class="contact" id="contact">

    
      
      
    <form action="https://formsubmit.co/markjohnguillermo47@gmail.com" method="POST">


        <div class="input-box">
          <input type="text" name="Name" placeholder="Full Name" required>
          <input type="email" name="Email" placeholder="Email Address" required>
        </div>

        <div class="input-box">
          <input type="number" name="Number" placeholder="Mobile Number">
          <input type="text" name="Subject" placeholder="Email Subject">
        </div>

      <textarea name="Message" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
      <input type="submit" value="Send Message" class="btn"> 
    </form>


    </section>


<footer class="footer">
      <div class="footer-text">
        <p>Copyright 2023 &copy; Pangasinan State University & MJ GUILLERMO | All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
      <a href="contact.php"><i class='bx bx-up-arrow-alt'></i></a>
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