<?php
include("../db/config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['password'];

$encode=md5($pass);

$sql="UPDATE c_info SET name='$name', password='$encode' WHERE c_id='$id' ";
$datupdate=mysqli_query($myconnect,$sql);

if($datupdate===TRUE)
{

echo header("location:../index.php");
}
else
{
 echo  " customer info  not added";
}


?>