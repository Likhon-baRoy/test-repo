<?php
include("../db/config.php");

$uid = $_POST['uid'];
$name = $_POST['username']; // Changed from 'name' to 'username'
$email = $_POST['email'];
$pass = $_POST['password'];
$encode = md5($pass);
$action = 1;

$sql = "INSERT INTO c_info(uid, name, email, password, action) VALUES('$uid', '$name', '$email', '$encode', '$action')";

$datainsert = mysqli_query($myconnect, $sql);

if($datainsert == TRUE) {
    echo header("location:../index.php");
} else {
    echo  "Customer Info Not Added!";
}
?>
