<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcoded username and password for simplicity
    $username = "admin";
    $password = "admin";

    // Get the input values from the form
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Check if the input values match the hardcoded values
    if ($inputUsername == $username && $inputPassword == $password) {
        // Successful login, redirect to a specific page
        header("Location: ../ADMIN/home.php");
        exit();
    } else {
        // Invalid credentials, you may want to show an error message
        echo "Invalid username or password";
    }
}
?>