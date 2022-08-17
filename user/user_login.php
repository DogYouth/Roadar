<?php
    include'../config.php';

    session_start();

    error_reporting(0);

    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        if($password == $cpassword) {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);

            if(!$result -> num_rows > 0) {
                $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);

                if($result) {
                    echo "<script>alert('Account registered successfully.')</script>";
                    $username = "";
                    $email = "";
                    $password = "";
                    $cpassword = "";
                } else {
                    echo "<script>alert('Woops! Something went wrong.')</script>";
                }
            } else {
                echo "<script>alert('Email already exists, please try again.')</script>"; 
            }
        } else {
            echo "<script>alert('Password is not matched.')</script>";
        }
    }elseif(isset($_POST['login'])) {
        $email = $_POST['lemail'];
        $password = md5($_POST['lpassword']);

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if($result -> num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: user_dashboard.php");
        }else {
            echo "<script>alert('Incorrect email or password, please try again.')</script>";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/user_login.css">
    <title>Roadar Login | User</title>
</head>
<body>
    <!-- SIGN IN CODE -->
    <div class="container">
        
        <div class="forms-container">
            <div class="signin-signup">
            <form action="#" method="POST" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="bx bxs-envelope"></i>
                    <input type="text" placeholder="Email" name="lemail" require/>
                </div>
                <div class="input-field">
                    <i class="bx bxs-lock-alt"></i>
                    <input type="password" placeholder="Password" name="lpassword" require>
                </div>
                <input type="submit" value="Login" class="btn solid" name="login"/>
                <a href="../admin/admin_login.php" class="user-admin"><p>Sign in as Admin</p></a>
                <p class="social-text">Or Sign in with social platforms</p>
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


            <!-- SIGN UP CODE-->
            <form action="../user/user_login.php" method="POST" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="bx bxs-user"></i>
                    <input type="text" placeholder="Username" name="username" required/>
                </div>
                <div class="input-field">
                    <i class="bx bxs-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required/>
                </div>
                <div class="input-field">
                    <i class="bx bxs-lock-alt"></i>
                    <input type="password" placeholder="Password" name="password" required/>
                </div>
                <div class="input-field">
                    <i class="bx bxs-lock-alt"></i>
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
                    <h3>New here ?</h3>
                    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex ratione. Aliquid!</p>
                    <button class="btn transparent" id="sign-up-btn"> Sign up</button>
            </div>
            <img src="../resources/images/signin-pic.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam ad deleniti.</p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>
            </div>
            <img src="../resources/images/signup-pic.svg" class="image" alt="" />
        </div>
        </div>
    </div>
  
    <!-- ANIMATED SIGN IN and SIGN UP -->
    <script src="../scripts/script.js"></script>


    </body>
  </html>