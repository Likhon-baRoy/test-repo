

<?php
include("../db/config.php");
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        
        <title><?php echo $title; ?> </title>
       <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div id="head"> 
        <?php
include("../header/header.php");
?>
        
        </div>
        <div id="nev">
        <?php
include("../menu/menu.php");
?>
                
                </div>
        
        <div id="body">
        <div id="sbar"> 
</div>
        <div id="cont">

<h6>  Add your Product Information</h6>
      <form id="product" name="product" enctype="multipart/form-data" method="post" action="../model/addproduct.php" >
      
      <p> Product Name</p> 
          <input type="text" id="pname" name="pname" placeholder="Write your product name">
          <p> Upload product image</p> 
          <input type="file" id="img" name="img" >
          <p> quentity</p>
        <input type="number" id="quentity" name="quentity" placeholder="Write your product quentity"><br>
     <p> Product Price</p>
        <input type="number" id="price" name="price" placeholder="Write your product price"><br>

          <input type="submit" name="btn_upload" value="Add product"onclick="return confirm()" >
      
      </form>
            
                        </div>
          </div>
        <div id="footer"><?php echo $author ?><div id="text"> </div><div id="icone"> 
            <a href="https://vsession.bdren.net.bd/faculty/classSchedules"><img src="img/den.jpeg" style=" width:50px; height:100px;"></a>
            <img src="../img/den.jpeg" style=" width:50px; height:100px;">
            <img src="img/den.jpeg" style=" width:50px; height:100px;">
            <img src="img/den.jpeg" style=" width:50px; height:100px;">
            </div>
        </div>
       
    </body>
</html>










