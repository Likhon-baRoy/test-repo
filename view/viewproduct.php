<?php

//include_once("../db/config.php");

$sql="SELECT * FROM product";
 $product=mysqli_query($myconnect,$sql);
while($row=mysqli_fetch_array($product))     
{
$pid=$row['p_id'];
$pname=$row['p_name'];
$imgpath=$row['img_path'];
$price=$row['price'];

$discount= round($price-$price*.20);

echo ''.$pname.'<br><a href="img/'.$imgpath.'" target="_blank"><img src="img/'.$imgpath.' " width="100" height="100"></a><br> Regular Price: <s>'.$price.'</s> <br> 
Offer Price:'.$discount.'<br><a href="view/viewsingleproduct.php?pid='.$pid.'">Read more.</a><br>';

}

?>
