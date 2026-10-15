<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Details</title>
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
            border: 1px solid #purple;
            border-radius: 20px;
            padding: 10px 15px;
            width: calc(50% - 60px);
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

        .employee-box {
            background-color: #BD9FB6;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 200%;
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

        .button-container {
            display: flex;
            justify-content: center;
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
            <a href="department.php" class="active">Department</a>
            <a href="position.php">Position</a>
            <a href="invoice.php">Payroll</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="profile-header">
            <h1>Search Department</h1>
        </div>
        <form method="POST" action="" class="search-bar-container">
    <input type="text" id="searchname" name="searchname" class="search-input" required placeholder="Enter Department Name">
    <button type="submit" name="search" class="search-button">
        <img src="magnifying-glass-icon.png" alt="Search">
    </button>
</form>

        <div class="profile-content">
            <div class="profile-details">
                <?php
                $hostname = "127.0.0.1:3307";
                $userid = "root";
                $userpass = "";
                $dbname = "mitchotel";

                $mitchotel = mysqli_connect($hostname, $userid, $userpass, $dbname);

                if (!$mitchotel) {
                    die("Database Connection Failed: " . mysqli_connect_error());
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["searchname"])) {
                    $searchname = mysqli_real_escape_string($mitchotel, $_POST["searchname"]);
                    $query = "SELECT * FROM departments WHERE name LIKE '%$searchname%'";
                } else {
                    $query = "SELECT * FROM departments";
                }

                $result = mysqli_query($mitchotel, $query);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='employee-box'>";
                            echo "<div class='detail-item'><div class='detail-label'>Department ID:</div><div class='detail-value'>{$row['id']}</div></div>";
                            echo "<div class='detail-item'><div class='detail-label'>Department Name:</div><div class='detail-value'>{$row['name']}</div></div>";
                            echo "</div>"; // Close employee-box
                        }
                    } else {
                        echo "<p>No department found.</p>";
                    }
                } else {
                    echo "Query failed: " . mysqli_error($mitchotel);
                }

                mysqli_close($mitchotel);
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
