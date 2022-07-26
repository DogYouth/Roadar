<?php
$xml = simplexml_load_file("loginuser.xml") or die ("Error: Cannot create object"); 

$error = false;
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    foreach ($xml->user as $user){ 
        if($password == $user->password && $user->usertype == 'admin'){
             header("Location:admin.php");
        } elseif($password == $user->password && $user->usertype == 'user'){
            header("Location:store.php");
        } else {
            $error = true;
        }
    }
    $error = true;
}

?>


<!DOCTYPE html>
<html lang="eng">
<head>
    <title>ROADAR</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logincaps.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
    <form method = "POST" action = "">

    <div class = "header">
        <h1>Login</h1>
        <h2>Login to your account </h2>
    </div>

    <div class = "container">

        <div class = "group">
            <p>Email</p>
            <input class = "textbox" type = "text" id = "username" name = "username" value = "" placeholder = "">
        </div>
        <div class = "group">
            <p>Password</p>
            <input class = "textbox" type = "password" id = "password" name = "password" value = "" placeholder = "">
            <i class="bi bi-eye-slash" id="togglePassword"></i>        
           
        </div>
        
        <?php
        if ($error){
            echo "<p class = \"error\">Invalid Credentials</p>";
        }
        ?>
        <input type="checkbox" id="rememberme" name="rememberme" value="rememberme">
<label for="rememberme">Remember Me</label><br>
        <div class="group">
            <button type = "submit" class = "btn" name = "login">Login</button>
        </div>

<div class = "signup">
    <a>Not yet registered?  </a><a href = "signup.php">Create an Account</a>
    </div>
    </div>
    </form>
</body>
</html>


<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>
