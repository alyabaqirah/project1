<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Profile Picture</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="emp_id">Employee ID:</label>
        <input type="text" id="emp_id" name="emp_id" required><br><br>
        <label for="profilepic">Profile Picture:</label>
        <input type="file" id="profilepic" name="profilepic" required><br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
<?php
$hostname = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "mitchotel"; // Change this to your database name

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emp_id = $_POST['emp_id'];

    // Check if file was uploaded without errors
    if (isset($_FILES["profilepic"]) && $_FILES["profilepic"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
        $filename = $_FILES["profilepic"]["name"];
        $filetype = $_FILES["profilepic"]["type"];
        $filesize = $_FILES["profilepic"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if (in_array($filetype, $allowed)) {
            // Check whether employee ID exists in the database
            $sql = "SELECT Emp_ID FROM employee WHERE Emp_ID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $emp_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Save the file
                $new_filename = $emp_id . "_" . $filename;
                $filepath = "image/" . $new_filename;
                if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $filepath)) {
                    // Update database with the file path
                    $sql = "UPDATE employee SET profilepic = ? WHERE Emp_ID = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ss", $filepath, $emp_id);
                    $stmt->execute();

                    echo "Your file was uploaded successfully.";
                } else {
                    echo "Error: There was a problem uploading your file. Please try again.";
                }
            } else {
                echo "Error: Employee ID not found.";
            }
        } else {
            echo "Error: There was a problem with the file type.";
        }
    } else {
        echo "Error: " . $_FILES["profilepic"]["error"];
    }
}

$conn->close();
?>
