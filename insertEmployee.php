<?php
// Assuming you have a database connection established
$servername = "127.0.0.1:3307";
$username = "root"; // Correct username
$password = ""; // Correct password
$dbname = "mitchotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$id = $_POST['id'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$department = $_POST['department'];
$position = $_POST['position'];
$bankdetail = $_POST['bankdetail'];

// Initialize profile picture variable
$target_file = '';

// Upload profile picture
if(isset($_FILES["profilepic"])) {
    $file_error = $_FILES["profilepic"]["error"];
    if($file_error == UPLOAD_ERR_OK) {
        $target_dir = "image/";
        $target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
        if(move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {
            echo "File uploaded successfully.<br>";
        } else {
            echo "Error moving the uploaded file.<br>";
        }
    } else {
        echo "File upload error: " . $file_error . "<br>";
    }
} else {
    echo "File input 'profilepic' is not set.<br>";
}

// Insert data into database
$sql = "INSERT INTO employee (Emp_ID, Emp_pass, Emp_name, Emp_phoneNo, Emp_email, Dept_ID, P_ID, Emp_bankdetail, profilepic)
        VALUES ('$id', '$password', '$name', '$phone', '$email', '$department', '$position', '$bankdetail', '$target_file')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
