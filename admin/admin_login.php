<?php

    error_reporting(0);
    
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(($username == 'admin') and ($password == '1234')) {
            header("Location: admin_dashboard.php");
        }else {
            echo "<script>alert('Incorrect username or password, please try again.')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/admin_login.css">
    <title>Roadar Login | Admin</title>
</head>
<body>
    <!-- SIGN IN CODE -->
    <div class="container">
        
        <div class="forms-container">
            <div class="signin-signup">
            <form action="#" method="POST" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username" require/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" require>
                </div>
                <input type="submit" value="Login" class="btn solid" name="login"/>
                <a href="../user/user_login.php" class="user-admin"><p>Sign in as Officer</p></a>
            </form>


            <!-- SIGN UP CODE-->
            <form action="login.php" method="POST" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" name="cpassword" required/>
                </div>
                <input type="submit" class="btn" value="Register"  name="register"/>
                <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
            </div>
        </div>
        
        <!-- ANIMATED CODE -->
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>ROADAR</h3>
                    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex ratione. Aliquid!</p>
            </div>
            <img src="../resources/images/admin-pic.svg" class="image" alt="" />
        </div>
        </div>
    </div>

    </body>
  </html>