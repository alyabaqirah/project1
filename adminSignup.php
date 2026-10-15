<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGN UP</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Raleway:400,700");

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #c7c5f4, #776bcc);
            /*overflow: hidden;*/ /*UNTUK SCROLL*/
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .screen {
            background: linear-gradient(90deg, #5d54a4, #7c78b8);
            position: relative;
            height: 600px; /*SINI TUKAR */
            width: 360px;
            box-shadow: 0px 0px 24px #5c5696;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 170px; /* Adjust Padding to Fit new Height */
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #fff;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #6c63ac;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #5d54a4, #6a679e);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background: #7e7bb9;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .login {
            width: 320px;
            padding: 30px;
            padding-top: 30px;
        }

        .login__field {
            padding: 10px 0px;
            position: relative;
        }

        .login__icon {
            position: absolute;
            top: 70px;
            color: #7875b5;
        }

        .login__input {
            border: none;
            border-bottom: 2px solid #d1d1d4;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: 0.2s;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #6a679e;
        }

        .login__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 15px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #d4d3e8;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #4c489d;
            box-shadow: 0px 2px 2px #5c5696;
            cursor: pointer;
            transition: 0.2s;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #6a679e;
            outline: none;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #7875b5;
        }

        .logo {
            position: absolute;
            top: -5px;
            left: 50px; /* Adjusted to center the logo */
            width: 260px;
            height: auto;
        }

        .logo__text {
            font-family: "HK Modular", serif;/*font*/
            font-style: normal;
            font-size: 30px;
            color: #000; 
            font-weight: 800;
            text-align: center; 
            margin-top: -50px; 
        }

        .toggle-password {
            margin-left: 10px; /* Adjust the margin to create space */
            margin-left: 20px;
            cursor: pointer;
            color: #7875b5;
            font-size: 14px;
        }

        .show__logo {
            position: absolute;
            margin-top: 5px; /* Adjust the margin to create space */
            margin-right: 70px;
            width: 30px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
            <img src="logomitc.png" alt="Logo" class="logo">
            <p class="logo__text">Create Account</p>
                <form name ="createAcc" action="adminSignup2.php" method="post" class="login">
                <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="id" class="login__input" placeholder="ID">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" id="passInput" name="password" class="login__input" placeholder="Password">
                        <img src="showPass.png" onclick=togglePassword() class="show__logo"></span>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="text" name="name" class="login__input" placeholder="Name">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="text" name="phone" class="login__input" placeholder="Phone Number">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="text" name="email" class="login__input" placeholder="Email">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text" type="submit">Submit</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>

        </div>
    </div>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("passInput");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>
