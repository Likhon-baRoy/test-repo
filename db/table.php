<?php
include("config.php");


//----Customer information--
$tbl_cinfo="CREATE TABLE IF NOT EXISTS c_info(
    c_id INT(11) NOT NULL auto_increment,
    PRIMARY KEY ( c_id ),
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(30) NOT NULL,
    action INT(2) NOT NULL
)";

$cinfo=mysqli_query($myconnect,$tbl_cinfo);
    if($cinfo===TRUE) {
        echo '<p>Customer information table created</> <br>';
    } else {
        echo "Customer information table not created ";
    }

$test=var_dump($cinfo);
echo $test;


$tbl_product="CREATE TABLE IF NOT EXISTS product(
    p_id int NOT NULL auto_increment,
    PRIMARY KEY(p_id),
    p_name VARCHAR (50) NOT NULL,
    img_name VARCHAR(50) NOT NULL,
    img_path VARCHAR(50) NOT NULL ,
    img_type VARCHAR(5) NOT NULL,
    quentiy int (50) NOT NULL,
    price int (20) NOT NULL
)";

$product= mysqli_query($myconnect,$tbl_product);

if($product===TRUE) {
    echo "<br>Product table created ";
} else {
    echo "product nt table created  ";
}

//------------order table--------------
$tbl_order="CREATE TABLE IF NOT EXISTS cu_order(
 or_id int  NOT NULL auto_increment,
    PRIMARY KEY(or_id),
    c_id int   NOT NULL,
    p_id int  NOT NULL,
    quentiy int (11) NOT NULL,
    FOREIGN KEY(c_id) REFERENCES c_info (c_id),
    FOREIGN KEY(p_id) REFERENCES product (p_id)
   )";

$order= mysqli_query($myconnect,$tbl_order);

if($order===TRUE) {
    echo "<br>Order table created ";
} else {
    echo " <br>Order table not created  ";
}
?>
