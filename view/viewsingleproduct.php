<?php
include_once("../db/config.php");
$pid=$_GET['pid'];

$sql="SELECT * FROM product WHERE p_id='$pid' ";
 $product=mysqli_query($myconnect,$sql);
while($row=mysqli_fetch_array($product))     
{
$pid=$row['p_id'];
$pname=$row['p_name'];
$imgpath=$row['img_path'];
$price=$row['price'];

$discount= round($price-$price*.20);

echo ''.$pname.'<br><img src="'.$imgpath.' " width="100" height="100"><br> Regular Price: <s>'.$price.'</s> <br> Offer Price:'.$discount.'<br>
<a href="../index.php">Back to Shop page</a><br>,<br><a href="#">Add to cart</a>';

}

?>
