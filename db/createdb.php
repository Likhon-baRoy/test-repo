<?php
$host="localhost";
$user="root";
$password="";
$myconnect=mysqli_connect($host, $user, $password);

$sql="CREATE DATABASE hall";
$result=mysqli_query($myconnect,$sql);

if($result===TRUE) {
    echo "Database Created";
} else {
    echo "Database Not Created";
}
?>
