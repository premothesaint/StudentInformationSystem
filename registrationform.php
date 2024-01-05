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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css -->

    <link rel="stylesheet" href="css.css">

    <style>
  
  .password-input {
            position: relative;
        }

        .password-input input {
            padding-right: 30px; /* Adjust the padding as needed */
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px; /* Adjust the right position as needed */
            transform: translateY(-50%);
            cursor: pointer;
        }

</style>

 

  </head>

  <body>
    <!-- header design -->



    <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="submit.php" class="register-form" id="register-form">

                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="first_name" id="first_name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Middle Name :</label>
                                <input type="text" name="middle_name" id="middle_name_name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="last_name" id="last_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-group">
                        <label for="gender" class="form-label">Gender:</label>
                        <select name="gender" id="gender" class="form-select">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Birthdate :</label>
                            <input type="date" name="birth_date" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="phone_no">Phone No. :</label>
                            <input type="text" name="pincode" id="pincode">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Create a password :</label>
                            <div class="password-input">
                                <input type="password" name="password" id="password" required />
                                <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                            </div>
                        </div>
                                    
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Year :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">Course :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
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
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <a href="student.php" class="button-link">
                                <button type="button" class="submit">Go Back</button>
                            </a>
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>



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
<div id="successModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Registered successfully!</p>
  </div>
</div>


<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var showPasswordIcon = document.querySelector(".show-password i");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordIcon.classList.remove("zmdi-eye");
            showPasswordIcon.classList.add("zmdi-eye-off");
        } else {
            passwordInput.type = "password";
            showPasswordIcon.classList.remove("zmdi-eye-off");
            showPasswordIcon.classList.add("zmdi-eye");
        }
    }
</script>
  </body>
  
</html>