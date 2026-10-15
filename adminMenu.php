<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SUBMIT AFTER LOGIN</title>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
	<style>
	 body {
		background-image: url('background.jpg');
        background-size: cover;
            background-attachment: fixed;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0; 
            /* login as tu nak center*/
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; 
	}

  .button-container {
            display: flex;
            justify-content: center;
            position: fixed;
            top: 0;
            width: 100%;
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .button-container form {
            margin: 0 100px;
        }

        .button {
            padding: 10px 20px;
            font-family: "Times New Roman";
            font-size: 30px;
            color: black;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        #button1 { /*menu*/
            background-color: #BD9FB6;
        }

        #button2 { /*profile*/
            background-color: #BD9FB6;
        }

        #button3 { /*logout*/
            background-color: #BD9FB6;
        }

       h1 {
        font-family: "Alfa Slab One", cursive;
        text-shadow: 
          -1px -1px 0 #000,  
           1px -1px 0 #000,
          -1px  1px 0 #000,
           2px  5px 0 #000;
        color:#EBCCCE ;
        font-size: 50px;
        letter-spacing: 4px;
        margin-bottom: 40px;
        padding: 0px;
        position: absolute;
        text-align: center;
    }

	h2 { /*untuk ubah yr ulimate gateway to melaka*/
	      	font-family: 'Papyrus', fantasy;
	      	color: black;
	      	font-size: 20px;
	      	margin-bottom: 10px;
	      	vertical-align:bottom;
	      	display:inline;
	      	background-color: rgba(0, 0, 0, 0.1);
	      	padding: 0px;
	      }

	.container2{ /*untuk ultimate gtway to melaka*/
        	display:flex;
            align-items:flex-end;
            height: 100vh;
        }

      .logo {
   	  position: absolute;
      top : 20px;
      left : 20px;
      width: 260px;
      height: auto;
      z-index: 1001; /* lagi tinggi z index ni, nnt dia appear in front */
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


</style>
</head>
<body>

	<img src="logomitc.png" alt= "Logo" class = "logo">
	<h1>WELCOME TO<br>
	MITC HOTEL PAYROLL<br>
	MANAGEMENT SYSTEM</h1>

    <div class="button-container">
       <form name="menu" action="adminMenu.php">
            <button class="button" id="button1" type="submit">Menu</button>
        </form>
        <form name="profile" action="adminProfile.php">
            <button class="button" id="button2" type="submit">Profile</button>
        </form>
        <form name="logout" action="logout.php">
            <button class="button" id="button3" type="submit">Logout</button>
        </form>
    </div>

	<div class="container2">
	<h2> "YOUR ULTIMATE GATEWAY TO MELAKA" </h2>
	</div>

	<div class="vertical-text">
        @mitchotel. @mitchotel. @mitchotel.@mitchotel. @mitchotel. @mitchotel. @mitchotel. @mitchotel.
    </div>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hostname = "127.0.0.1:3307";
    $userid = "root";
    $userpass = "";
    $dbname = "mitchotel";

    // Create connection to database
    $mitchotel = mysqli_connect($hostname, $userid, $userpass, $dbname);

    if (!$mitchotel) {
        echo "Database Connection Failed" . mysqli_connect_error();
    } else {
        $aid = mysqli_real_escape_string($mitchotel, $_POST['Admin_ID']);
        $apassword = mysqli_real_escape_string($mitchotel, $_POST['password']);
        $chkrec = "SELECT * FROM `admin` WHERE `Admin_ID` ='$aid';";
        $sqlchk = mysqli_query($mitchotel, $chkrec);
        $reccount = mysqli_num_rows($sqlchk);

        if ($reccount < 1) {
            $sqlin = "INSERT INTO `admin` (`Admin_ID`, `password`) VALUES ('$aid', '$apassword');";
            $sqlchk = mysqli_query($mitchotel, $sqlin);
            if ($sqlchk) {
                echo "<script>alert('Successfully Added!');</script>";
            } else {
                echo "<script>alert('Failed to Add: " . mysqli_error($mitchotel) . "');</script>";
            }
        } else {
            echo "<script>alert('Admin ID already exists');</script>";
        }

        mysqli_close($mitchotel);
    }
}
?>