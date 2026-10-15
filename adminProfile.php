<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['Admin_ID'])) {
    header("Location: adminLogin.php");
    exit();
}

$servername = "127.0.0.1:3307"; // Replace with your MySQL server name if different
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "mitchotel"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch admin details from session
$id = isset($_SESSION['Admin_ID']) ? $_SESSION['Admin_ID'] : '';

// Initialize variables to avoid undefined variable warnings
$name = '';
$phone_number = '';
$email = '';
$department = '';
$position = '';
$bank_detail = '';
$profile_picture = '';

// Fetch admin details based on the admin's ID
if (!empty($id)) {
    $sql = "SELECT Admin_ID, Admin_name, Admin_phoneNo, Admin_email FROM `admin` WHERE Admin_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        $name = $admin['Admin_name'];
        $phone_number = $admin['Admin_phoneNo'];
        $email = $admin['Admin_email'];

        // Fetch additional details from search_employee table including profile picture
        $sql2 = "SELECT Dept_ID, P_ID, Emp_bankdetail, profilepic FROM `employee` WHERE Emp_name = ? AND Emp_phoneNo = ? AND Emp_email = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("sss", $name, $phone_number, $email);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        if ($result2->num_rows > 0) {
            $employee = $result2->fetch_assoc();
            $department = $employee['Dept_ID'];
            $position = $employee['P_ID'];
            $bank_detail = $employee['Emp_bankdetail'];
            $profile_picture = $employee['profilepic'];
        }
        $stmt2->close();
    } else {
        // Handle case where admin details are not found
        $admin = null;
    }
    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Cinzel+Decorative:wght@400;700;900&family=Rammetto+One&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .logo {
            width: 150px;
            height: auto;
            position: absolute;
            left: 20px;
        }

        .nav {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .nav a {
            margin: 0 10px;
            padding: 10px 15px;
            font-size: 20px;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }

        .nav a.active {
            font-weight: bold;
            text-decoration: underline;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #BD9FB6;
            padding: 20px;
            border-radius: 10px;
            margin-top: 40px;
            width: 50%;
        }

        .profile-header {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .profile-header h1 {
            font-family: "Cinzel Decorative", serif;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px  1px 0 #000, 2px  5px 0 #000;
            margin-bottom: 20px;
            color: #FFC0CB;
        }

        .profile-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            width: 100%;
        }

        .picture {
            width: 200px;
            height: 200px;
            background-color: white;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            font-weight: bold;
        }

        .profile-details {
            display: flex;
            flex-direction: column;
            margin-left: 40px;
            width: 100%;
        }

        .detail-item {
            margin: 10px 0;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .detail-label {
            width: 150px;
            font-weight: bold;
        }

        .detail-input {
            width: 60%;
            height: 30px;
            background-color: white;
            border: none;
            border-radius: 10px;
            padding: 5px;
            color: black;
        }

        h2 {
            font-family: 'Papyrus', fantasy;
            color: black;
            font-size: 20px;
            margin-bottom: 10px;
            vertical-align: bottom;
            display: inline;
            background-color: rgba(0, 0, 0, 0.1);
            padding: 0px;
        }

        .vertical-text {
            position: absolute;
            right: 0;
            top: 110%;
            transform: translateY(-50%) rotate(90deg);
            transform-origin: right top;
            font-size: 20px;
            font-weight: bold;
        }

        .vertical-text a {
            text-decoration: none;
            color: black;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .picture img {
    width: 100%; /* Make the image take the full width of the container */
    height: auto; /* Maintain aspect ratio */
}

    </style>
</head>
<body>
    <div class="header">
        <img src="logomitc.png" alt="Logo" class="logo">
        <div class="nav">
            <a href="adminMenu.php">Menu</a>
            <a href="adminProfile.php" class="active">Profile</a>
            <a href="employeeDetails.php">Add Employee</a>
            <a href="searchemployee.php">Employee Details</a>
            <a href="department.php">Department</a>
            <a href="position.php">Position</a>
            <a href="invoice.php">Payroll</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="profile-header">
            <h1>PROFILE</h1>
        </div>
        <div class="profile-content">
            <div class="picture">
                <?php if (!empty($profile_picture)): ?>
                    <img src="<?php echo $profile_picture; ?>" alt="Profile Picture">
                <?php else: ?>
                    <p>No profile picture found.</p>
                <?php endif; ?>
            </div>
            <div class="profile-details">
                <div class="detail-item">
                    <div class="detail-label">ID:</div>
                    <input type="text" class="detail-input" value="<?php echo $id; ?>" readonly>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Name:</div>
                    <input type="text" class="detail-input" value="<?php echo $name; ?>" readonly>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Phone Number:</div>
                    <input type="text" class="detail-input" value="<?php echo $phone_number; ?>" readonly>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Email:</div>
                    <input type="text" class="detail-input" value="<?php echo $email; ?>" readonly>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Department:</div>
                    <input type="text" class="detail-input" value="<?php echo $department; ?>" readonly>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Position:</div>
                    <input type="text" class="detail-input" value="<?php echo $position; ?>" readonly>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Bank Detail:</div>
                    <input type="text" class="detail-input" value="<?php echo $bank_detail; ?>" readonly>
                </div>
            </div>
        </div>
    </div>

    <div class="container2">
        <h2>"YOUR ULTIMATE GATEWAY TO MELAKA"</h2>
    </div>
    <div class="vertical-text">
        @mitchotel. @mitchotel. @mitchotel.@mitchotel. @mitchotel. @mitchotel. @mitchotel. @mit
    </div>
</body>
</html>
