<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
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
            flex-direction: row; /* Ensure items are in a row */
            align-items: flex-start;
            width: 100%;
        }

        .profile-details-container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            background-color: #BD9FB6;
            padding: 20px;
            border-radius: 10px;
            margin-top: 40px;
            width: 150%;
            box-sizing: border-box;
            margin-left: -100px;
        }

        .profile-details {
            display: flex;
            flex-direction: column;
            margin-left: 40px;
            width: 100%;
        }

        .detail-item {
            display: flex;
            align-items: center;
            margin: 10px 0;
            font-size: 18px;
            width: 80%;
        }

        .detail-label {
            width: 150px;
            font-weight: bold;
            color: #333;
        }

        .detail-value {
            flex: 1;
        }

        .detail-value input {
            width: calc(100% - 160px);
            padding: 10px;
            margin-left: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        form {
            width: 100%;
            max-width: 600px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .custom-file-upload {
            background-color: #fff; /* Ensure this is a solid color */
            border: 1px solid #ccc;
            box-shadow: none; /* Remove any box shadow */
            text-align: center;
            height: 250px;
            width: 250px;
            margin-top: 60px;
            position: relative; /* Ensure correct positioning for the image */
            overflow: hidden; /* Ensure the image does not overflow the box */
        }


        .custom-file-upload:hover {
            background-color: #a77ca3;
        }

        .custom-file-upload img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
            object-fit: cover;
            
        }

        #file-chosen {
            margin-left: 10px;
            font-size: 18px; /* Match font size with labels */
    font-weight: bold; /* Match font weight with labels */
    color: #333; /* Match font color with labels */
    font-family: 'Times New Roman', serif; /* Match font family with labels */
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            background-color: white;
            font-size: 16px; /* Match font size with labels */
    font-weight: bold; /* Match font weight with labels */
    color: #333; /* Match font color with labels */
    font-family: 'Times New Roman', serif; /* Match font family with labels */

        }

        input[type="submit"] {
            background-color: #77dd77;
            cursor: pointer;
            width: auto;
            padding: 10px 20px;
            font-size: 16px; /* Match font size with labels */
    font-weight: bold; /* Match font weight with labels */
    color: #333; /* Match font color with labels */
    font-family: 'Times New Roman', serif; /* Match font family with labels */
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        .container2 {
            position: absolute;
            top: 130%;
            width: 50%;
            text-align: center;
            padding: 10px 0;
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

        .profile-item-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .profile-item {
            flex: 1 1 calc(50% - 20px);
        }

        .picture {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .picture label {
            margin-right: 10px;
        }

        .picture input {
            margin-bottom: 10px; /* Add space between the input and the img */
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="logomitc.png" alt="Logo" class="logo">
        <div class="nav">
            <a href="adminMenu.php">Menu</a>
            <a href="adminProfile.php">Profile</a>
            <a href="addEmployee.php" class="active">Add Employee</a>
            <a href="searchemployee.php">Employee Details</a>
            <a href="department.php">Department</a>
            <a href="position.php">Position</a>
            <a href="invoice.php">Payroll</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="profile-header">
            <h1>EMPLOYEE DETAILS</h1>
        </div>
        <form action="insertEmployee.php" method="post" enctype="multipart/form-data">
            <div class="profile-details-container">
                <div class="profile-content">
                    <div class="picture">
                        <label for="profilepic">Profile Picture:</label>
                        <div class="custom-file-upload" onclick="document.getElementById('profilepic').click()">
                            <span id="file-chosen">Choose File</span>
                            <img id="preview" src="#" alt="Preview" style="display: none;">
                        </div>
                        <input type="file" id="profilepic" name="profilepic" style="display:none;" onchange="previewImage(event)">
                    </div>
                    <div class="profile-details">
                        <div class="detail-item">
                            <label for="id" class="detail-label">ID:</label>
                            <div class="detail-value">
                                <input type="text" id="id" name="id" required>
                            </div>
                        </div>
                        <div class="detail-item">
                            <label for="password" class="detail-label">Password:</label>
                            <div class="detail-value">
                                <input type="password" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="detail-item">
                            <label for="name" class="detail-label">Name:</label>
                            <div class="detail-value">
                                <input type="text" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="detail-item">
                            <label for="phone" class="detail-label">Phone Number:</label>
                            <div class="detail-value">
                                <input type="text" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="detail-item">
                            <label for="email" class="detail-label">Email:</label>
                            <div class="detail-value">
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="detail-item">
                            <label for="department" class="detail-label">Department ID:</label>
                            <div class="detail-value">
                                <input type="text" id="department" name="department" required>
                            </div>
                        </div>
                        <div class="detail-item">
                            <label for="position" class="detail-label">Position ID:</label>
                            <div class="detail-value">
                                <input type="text" id="position" name="position" required>
                            </div>
                        </div>
                        <div class="detail-item">
                            <label for="bankdetail" class="detail-label">Bank Detail:</label>
                            <div class="detail-value">
                                <input type="text" id="bankdetail" name="bankdetail" required>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label"></div>
                            <div class="detail-value">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container2">
        <h2>"YOUR ULTIMATE GATEWAY TO MELAKA"</h2>
    </div>
    <div class="vertical-text">
        @mitchotel. @mitchotel. @mitchotel.@mitchotel. @mitchotel. @mitchotel. @mitchotel. @mit
    </div>

    <script>
        function previewImage(event) {
            var input = event.target;
            var preview = document.getElementById('preview');
            var fileChosen = document.getElementById('file-chosen');
            
            var reader = new FileReader();
            reader.onload = function(){
                preview.style.display = 'block';
                preview.src = reader.result;
                fileChosen.textContent = input.files[0].name;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>
</html>
