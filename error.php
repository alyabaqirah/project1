<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Animated Website HTML CSS</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Cinzel+Decorative:wght@400;700;900&family=Rammetto+One&family=Rubik+Glitch&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">
   <style>
        
* {
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body { 
    background-image: url('bgerror.jpg');
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

.header {
    position:fixed;
    top:0;
    left:0;
    padding:30px 8%;
    background: transparent;
    display:flex;
    justify-content: space-between;
    align-items: center;
    z-index:100;
    cursor:pointer;
}

.logo { 
    position: absolute;
    top : 20px;
    left : 20px;
    width: 150px;
    height: auto;
    z-index: 2;
  }

.navbar {
    font-size: 18px;
    color:#3f072a;
    text-decoration: none;
    font-weight: 500;
    justify-content: space-between;
    margin: 0px 40px;
    margin-left: 500px;
    z-index: 2;
}

.navbar a {
    font-size: 22px;
    font-family: "Comfortaa", sans-serif;
    color: #e4b3d1;
    text-decoration: none;
    font-weight: 500;
    margin: 0 10px;
    transition: .3s;
    
}

a.active {
    font-weight: bold;
    text-decoration: underline;
    background: none;
}

.navbar a:hover {
    color:rgb(239, 159, 255);
}

.social-media {
    display: flex;
    justify-content: space-between;
    width: 150px;
    height: 40px;
    z-index: 2;
    margin-left: 300px;
}

.social-media a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: transparent;
    border: 2px solid rgb(255, 185, 255);
    text-decoration: none;
    transform: rotate(45deg);
}

.social-media a:hover {
    border-color:rgb(255, 185, 255);
}

.social-media a i {
    font-size: 24px;
    color: rgb(255, 185, 255);
    transform: rotate(-45deg);

}


.home {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 8%;
    overflow: hidden;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    z-index: 1;
}

.home-content {
    position: relative;
    max-width: 630px;
    z-index: 2;
    color: #fff; /* Adjust text color if needed */
    margin-right: 50%;
    margin-bottom: -70px;
}

.home-content h1 {
    font-size: 100px;
    line-height: 1.2;
    font-family: "Rubik Glitch", system-ui;
    font-weight: 400;
    font-style: normal;
    color: rgb(184, 4, 4);
    text-shadow: 
    -1px -1px 0 #fff,  
    1px -1px 0 #fff,
    -1px 1px 0 #fff,
    1px 1px 0 #fff; /* white outline */
}

.home-content h3 {
    font-size:40px;
    font-family: "Rammetto One", sans-serif;
    font-style: normal;
}

.home-content p {
    font-size: 30px;
    margin: 15px 0 30px;
    font-family: 'Times New Roman', Times, serif;
    letter-spacing: 2px;
}

.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 120px;
  font-size: 30px;
  cursor: pointer;
  border-color: #04AA6D;
  color: blue;
  display: inline-block;
  border: none; /* remove border */
  border-radius: 50px;
  letter-spacing: 6px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.3s ease; /* smooth transition */
}

.btn:hover {
  background-color: #B4CBF0;
  color: white;
}


        </style>
    </head>
    <body>
        <img src="logomitc.png" alt= "Logo" class = "logo">
        <header class="header">
            <a href="#" class="logo"></a>
            <nav class="navbar">
                <a href ="design.html" class="active">Home</a>
                <a href ="login.php" action="login.php">Login</a>
                <a href ="adminSignup.php">Register</a>
            </nav>

            <div class="social-media">
            <a href ="error.php"><i class='bx bxs-phone-call'></i></a>
            <a href ="https://linktr.ee/mitchotelmelaka?utm_source=linktree_profile_share&ltsid=79527ec3-b098-451b-a6c5-032e90fe36e4"><i class='bx bx-link'></i></a>
            <a href ="https://www.instagram.com/mitchotel?igsh=MW9ma2Zjc3JzaXp2"><i class='bx bxl-instagram'></i></a>
        </div>
        </header>

        <section class="home">
            <div class="overlay"></div>
            <div class="home-content">
                <h1>ERROR ?</h1>
                <h3>CONTACT HR</h3>
                <p><b> 017-3121507 - HR SITI QAMA </b></p>
                <div class="btn">
                <a href ="https://wa.link/7z8jfs"><i class='bx bxl-whatsapp'></i></a>
            </div>
            </div>
    </body>
</html>