<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page
    </title>
    <style>
 body { 
    background-image: url('bglogin.jpg');
    background-size: cover;
    background-position: center; 
    background-repeat: no-repeat; /*taknak repeat bg*/
    /* untuk cover entire screen */
      height: 100vh;
      width: 100vw;
      margin: 10; 
      padding: 0; 
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column; 
      z-index: -1;
  }
        .container2 {
            display: flex;
            align-items: flex-end;
            height: 20vh;
        }

        h1 { /*LOGIN AS*/
            font-family: 'copperplate gothic'; /* Change this to your desired font */
            font-size: 60px;
            color: white; /* Adjust the color as needed */
            margin-top: 40px; /* Adjust the top margin if needed */
            z-index:1;
            background: linear-gradient(90deg, red, blue, white); /* Gradient from blue to light blue */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 1px black; /* Add a black text outline */

        }

        h2 { /*ULTIMATE GATEWAY TO MELAKA*/
            font-family: 'Papyrus', fantasy;
            color: black;
            font-size: 20px;
            margin-bottom: 10px;
            vertical-align: bottom;
            display: inline;
            background-color: rgba(0, 0, 0, 0.1);
            padding: 0px;
            
        }

        .logo { /*LOGO*/
            position: absolute;
            top: 20px;
            left: 20px;
            width: 160px;
            height: auto;
        }


   
        .vertical-text { /*@MITC HOTEL*/
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

        /*CENTER CONTAINER*/
        .container {
            text-align: center;
        }

        button {
            padding: 30px 50px; /*SAIZ KOTAK EMPLOYEE & ADMIN*/
            font-family: 'copperplate gothic'; /*FONT*/
            font-weight: bold;
            font-size: 30px;
            background-color: #AEC6CF;            ;
            color: black;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            margin-top: 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            }


        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            z-index: -1;
}
        
    </style>
</head>
<body>
<body>
<img src="logomitc.png" alt= "Logo" class = "logo">

    <h1> LOGIN AS : </h1>

    <div class = "container">
    <form name ="login" action="adminLogin.php"> 
        <button type="submit">Admin</button>
    </form>
    
    <form name ="login" action="employeeLogin.php"> 
        <button type="submit">Employee</button>
    </form>
    </div>

    <div class="container2">
    <h2> "YOUR ULTIMATE GATEWAY TO MELAKA" </h2>
    </div>

    <div class="vertical-text">
        @mitchotel. @mitchotel. @mitchotel.@mitchotel. @mitchotel. @mitchotel. @mitchotel. @mitchotel.
    </div>

    <div class="overlay"></div>

</body>
</html>