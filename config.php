<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "signin_signup_roadar";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn) {
    die("<script>alert('Connection Failed')</script>");
}


?>