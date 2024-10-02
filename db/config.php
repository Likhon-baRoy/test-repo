<?php
$title="Learning itself myself sample";
$author="Copyright@Likhon";
$host="localhost";
$user="root";
$password="";
$dbname="hall";
$myconnect=mysqli_connect($host,$user,$password,$dbname);

if(mysqli_connect_error()) {
    echo mysqli_connect_error();
} else {
    // echo "Database connection successful <br> happy coding :)";
}
?>
