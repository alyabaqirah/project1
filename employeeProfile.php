<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Employee</title>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #bdd5e7;
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
            background-color: #c2b19c;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 70%;
        }

        .profile-header {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .profile-header h1 {
            font-family: 'Alfa Slab One', cursive;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px  1px 0 #000, 2px  5px 0 #000;
            margin-bottom: 20px;
            color: #e8ceb0;
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
            background-color: #9a7b6c;
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
            width: 100%;
            height: 30px;
            background-color: #9a7b6c;
            border: none;
            border-radius: 10px;
            padding: 5px;
            color: black;
        }

        h2 { /**setting untuk your ultimate gateway to melaka */
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

        #button1 { /** edit button submit */
            background-color: #77dd77;
            color: black;
            margin-left: 900px;
            border-radius: 50px;
            padding: 10px 20px;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="logomitc.png" alt="Logo" class="logo">
        <div class="nav">
            <a href="employeeMenu.php">Menu</a>
            <a href="employeeProfile.php" class="active">Profile</a>
            <a href="invoice.php">Invoice</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="profile-header">
            <h1>PROFILE</h1>
        </div>
        <div class="profile-content">
            <div class="picture">
            <label for="profile-picture">Profile Picture:</label>
            <input type="file" id="profile-picture" name="profile-picture" accept="image/*">
            </div>
            
            <div class="profile-details">
                <div class="detail-item">
                    <div class="detail-label">ID:</div>
                    <input type="text" class="detail-input" placeholder="Enter ID">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Name:</div>
                    <input type="text" class="detail-input" placeholder="Enter Name">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Phone Number:</div>
                    <input type="text" class="detail-input" placeholder="Enter Phone Number">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Email:</div>
                    <input type="text" class="detail-input" placeholder="Enter Email">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Department:</div>
                    <input type="text" class="detail-input" placeholder="Enter Department">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Position:</div>
                    <input type="text" class="detail-input" placeholder="Enter Position">
                </div>
                <div class="detail-item">
                    <div class="detail-label">Bank Detail:</div>
                    <input type="text" class="detail-input" placeholder="Enter Bank Detail">
                </div>
            </div>
        </div>
        <div class="button-container">
            <button class="button" id="button1" type="submit" name="submit">SUBMIT</button>
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

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hostname = "localhost";
    $userid = "root";
    $userpass = "";
    $dbname = "mitchotel";

    // buat connection untuk simpan dalam databases huehuehue
    $mitchotel = mysqli_connect($hostname, $userid, $userpass, $dbname);

    if (!$mitchotel) 
    {
        echo "Database Connection Failed" . mysqli_connect_error();
    } 
    else
    { // elak dia dari tak masuk form. kadang gile mende ni . untuk keselamatan ehehehhe
        $addid = isset($_POST['id']) ? mysqli_real_escape_string($mitchotel, $_POST['id']) : '';
        $addname = isset($_POST['name']) ? mysqli_real_escape_string($mitchotel, $_POST['name']) : '';
        $addname = isset($_POST['picture']) ? mysqli_real_escape_string($mitchotel, $_POST['picture']) : '';
        $addphonenum = isset($_POST['phonenum']) ? mysqli_real_escape_string($mitchotel, $_POST['phonenum']) : '';
        $addemail = isset($_POST['email']) ? mysqli_real_escape_string($mitchotel, $_POST['email']) : '';
        $adddepartment = isset($_POST['department']) ? mysqli_real_escape_string($mitchotel, $_POST['department']) : '';
        $addposition = isset($_POST['position']) ? mysqli_real_escape_string($mitchotel, $_POST['position']) : '';
        $addbankdetail = isset($_POST['bankdetail']) ? mysqli_real_escape_string($mitchotel, $_POST['bankdetail']) : '';

        if (!empty($pid) && !empty($pname) && !empty($ppicture) && !empty($pphonenum) && !empty($pemail) && !empty($pdepartment) && !empty($pposition) && !empty($pbankdetail)) {
            $chkrec = "SELECT * FROM `addemployee` WHERE `id` ='$addid';";
            $sqlchk = mysqli_query($mitchotel, $chkrec);
            $reccount = mysqli_num_rows($sqlchk);

            if ($reccount < 1) {
                $sqlin = "INSERT INTO `profilemitc` (`id`, `name`,`picture`, `phonenum`, `email`, `department`, `position`, `bankdetail`) VALUES ('$pid', '$pname','$ppicure', '$pphonenum', '$pemail', '$pdepartment', '$pposition', '$pbankdetail');";
                $sqlchk = mysqli_query($mitchotel, $sqlin);
                if ($sqlchk) {
                    echo "<script>alert('Employee Info Successfully Added!');</script>";
                } else {
                    echo "<script>alert('Failed to Add: " . mysqli_error($mitchotel) . "');</script>";
                }
            } else {
                echo "<script>alert('Employee info already exists');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all fields');</script>";
        }

        mysqli_close($mitchotel);
    }
}
?>

