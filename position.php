<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Position Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Cinzel+Decorative:wght@400;700;900&family=Rammetto+One&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Migra-Extrabold';
            src: url('Migra-Extrabold.ttf') format('truetype');
        }
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

        .profile-header {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 50px;
        }

        .profile-header h1 {
            font-family: "Cinzel Decorative", serif;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 2px 5px 0 #000;
            margin-bottom: 20px;
            color: #FFC0CB;
        }

        .profile-content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 40px;
        }

        .profile-details {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
            padding: 20px;
            margin-left: 100px;
        }

        .position-box {
            background-color: #BD9FB6;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 200%; /* Adjusted to fit within container */
        }

        .detail-item {
            margin: 10px 0;
            font-size: 18px;
            display: flex;
            width: 100%;
        }

        .detail-label {
            width: 150px;
            font-weight: bold;
            color: #333;
        }

        .detail-value {
            background-color: #fff;
            border: 1px solid #purple; /* Corrected typo in color name */
            border-radius: 20px;
            padding: 5px 10px;
            width: calc(70% - 60px);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-left: 40px;
        }

        .search-bar-container {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            gap: 20px;
            margin-left: 100px;
            position: relative;
            
        }

        .search-input {
            width: 50%;
            height: 40px;
            padding: 10px;
            border: none;
            border-radius: 20px;
            background-color: #D1D9E8;
            color: black;
            font-size: 16px;
            flex: 1;
        }

        .search-button {
            height: 40px;
            width: 80px;
           
            background-color: transparent;
           border: none;
           outline: none;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute; /* Position relative to the search bar container */
    right: 0; /* Adjust positioning to the right */
        }

        .search-button img {
            width: 20px;
            height: 20px;
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
h2 { /*setting untuk your ultimate gateway to melaka */
            font-family: 'Papyrus', fantasy;
            color: black;
            font-size: 20px;
            margin-bottom: 10px;
            vertical-align: bottom;
            display: inline;
            background-color: rgba(0, 0, 0, 0.1);
            padding: 0px;
        }

        .vertical-text { /**untuk @mitchotel ygy*/
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


    </style>
</head>
<body>
    <div class="header">
        <img src="logomitc.png" alt="Logo" class="logo">
        <div class="nav">
            <a href="adminMenu.php">Menu</a>
            <a href="adminProfile.php">Profile</a>
            <a href="employeeDetails.php">Add Employee</a>
            <a href="searchemployee.php">Employee Details</a>
            <a href="department.php">Department</a>
            <a href="position.php" class="active">Position</a>
            <a href="invoice.php">Payroll</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="profile-header">
            <h1>Position Details</h1>
        </div>
       <form method="POST" action="" class="search-bar-container">
    <input type="text" id="position" name="position" class="search-input" placeholder="Enter Position Name">
    <button type="submit" class="search-button">
        <img src="magnifying-glass-icon.png" alt="Search">
    </button>
</form>

        <div class="profile-content">
            <div class="profile-details">
               <?php
$conn = new mysqli("127.0.0.1:3307", "root", "", "mitchotel");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $position = $conn->real_escape_string($_POST['position']);
    $sql = "SELECT * FROM positions WHERE name = '$position'";
} else {
    $sql = "SELECT * FROM positions";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="position-box">';
        echo '<div class="detail-item"><span class="detail-label">Position ID:</span><span class="detail-value">' . $row['id'] . '</span></div>';
        echo '<div class="detail-item"><span class="detail-label">Name:</span><span class="detail-value">' . $row['name'] . '</span></div>';
        echo '<div class="detail-item"><span class="detail-label">Min Qualification:</span><span class="detail-value">' . $row['min_qualification'] . '</span></div>';
        echo '<div class="detail-item"><span class="detail-label">Min Salary:</span><span class="detail-value">RM ' . $row['min_salary'] . '</span></div>';
        echo '<div class="detail-item"><span class="detail-label">Max Salary:</span><span class="detail-value">RM ' . $row['max_salary'] . '</span></div>';
        echo '</div>'; // Close position-box
    }
} else {
    echo '<p>No positions found in the database.</p>';
}

$conn->close();
?>

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
