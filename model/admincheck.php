<?php
include("../db/config.php");

$email=$_POST['email'];
$pass=$_POST['password'];
$role=$_POST['role'];
$encode=md5($pass);

$sql= "SELECT * FROM c_info WHERE email='$email' and role='$role' and password='$encode'";
$result=mysqli_query($myconnect,$sql);

$count=mysqli_num_rows($result);

if($count>=1) {
    // Display JavaScript alert after redirection
    echo '<script>alert("Successfully Logged In!");</script>';
    // Redirect to index.php after showing the alert
    echo '<script>window.location.href = "../index.php";</script>';
} else {
    echo '<script>alert("Username or Password incorrect! Please try again.");</script>';
    echo '<script>window.location.href = "../view/login.php";</script>';
}
?>
