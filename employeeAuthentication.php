<?php
session_start();

if (isset($_POST['id']) && isset($_POST['password'])) {
    // Database connection settings
    $servername = "127.0.0.1:3307";
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "mitchotel";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize user input
    $id = $conn->real_escape_string($_POST['id']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to check if the user exists
    $sql = "SELECT * FROM searchemployee WHERE id='$id' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Set session variables and redirect to the employee dashboard or home page
        $_SESSION['employee_id'] = $id;
        header("Location: employeeMenu.php");
        exit();
    } else {
        // If no matching records, redirect back with an error
        header("Location: employeeLogin.php?error=Invalid ID or Password");
        exit();
    }

    // Close the connection
    $conn->close();
} else {
    // Redirect to login page if the form is not submitted
    header("Location: employeeLogin.php");
    exit();
}
?>
