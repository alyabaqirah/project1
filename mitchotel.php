<!DOCTYPE html>
<html>
<head>
  <title>MITC HOTEL PAYROLL MANAGEMENT SYSTEM</title>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <style>
  body { 
    background-image: url('mitc.jpg');
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
  }

       h1 { /*untuk edit ayat mitc hotel payroll system*/
        font-family: "Alfa Slab One", cursive;
        text-shadow: 
          -1px -1px 0 #000,  
           1px -1px 0 #000,
          -1px  1px 0 #000,
           2px  5px 0 #000;
        color: #e8ceb0;
        font-size: 70px;
        letter-spacing: 4px;
        margin-bottom: 50px;
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

      .container {
        text-align: center; /* nak bagi dia center dlm container tu */
      }

       .container2{
          display:flex;
            align-items:flex-end;
            height: 100vh;
        }


      button {
      padding: 30px 50px; /*saiz kotak start tu*/
      font-family: 'copperplate gothic'; /*font kotak start tu*/
      font-weight: bold;
      font-size: 30px;
      background-color: #e8ceb0;
      color: black;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 50px;
    }
 
    .logo { /** logo ya gais ya */
      position: absolute;
      top : 20px;
      left : 20px;
      width: 260px;
      height: auto;
    }

    .vertical-text { /* untuk text @mitchotel tu ygy */
            position: absolute; 
            right: 0;
            top: 110%;
            transform: translateY(-50%) rotate(90deg);
            transform-origin: right top;
            font-size: 20px;
            font-weight: bold;
        }

    .vertical-text a { /* untuk text @mitchotel tu ygy */
            text-decoration: none;
            color: black;
        }

</style>
</head>
<body>
    <img src="logomitc.png" alt= "Logo" class = "logo">
    <h1> MITC HOTEL PAYROLL MANAGEMENT SYSTEM </h1>

    <div class = "container">
    <form name ="login" action="login.php"> 
        <button type="submit">Start</button>
    </form>
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