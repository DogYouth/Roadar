<?php

    error_reporting(0);
    
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(($username == 'admin') and ($password == '1234')) {
            header("Location: dashboard-admin.php");
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
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="../styles/login.css">

<title>login - roadar</title>

</head>
<body>

<div class="container">
    <div class="form-container">
        <form action="#" method="POST" class="sign-in-form">
                    <img class="login-logo" src="../resources/logo/Roadar-logo-name-a.png"/>
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="bx bxs-user"></i>
                        <input type="text" placeholder="Username" name="username" require/>
                    </div>
                    <div class="input-field">
                        <i class="bx bxs-lock-alt"></i>
                        <input type="password" placeholder="Password" name="password" require>
                    </div>
                    <input type="submit" value="Login" class="login-btn solid" name="login"/>
                    <a href="login-user.php" class="user-admin"><p>Sign in as Officer</p></a>
        </form>
    </div>
</div>

</body>
</html>
