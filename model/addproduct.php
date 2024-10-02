<?php
include ("../db/config.php");


//upload product into image folder  

if(isset($_POST['btn_upload']))
{
    $filetmp = $_FILES["img"]["tmp_name"];
    $filename = $_FILES["img"]["name"];
    $filetype = $_FILES["img"]["type"];
    $filepath = "../img/".$filename;
    
    move_uploaded_file($filetmp,$filepath);
    
    
}




//product insert to the database 


$pname=$_POST['pname'];
$pquentity=$_POST['quentity'];
$pprice=$_POST['price'];
$sql="INSERT INTO product(p_name,img_name,img_path,img_type,quentiy,price) VALUES('$pname','$filename','$filepath','$filetype','$pquentity','$pprice')";
$result=mysqli_query($myconnect,$sql);
header("location:../index.php"); 



?>


