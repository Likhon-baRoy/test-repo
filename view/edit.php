
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

<h1>  Edit your information</h1>

      <form id="signup" name="signup" method="post" action="../model/update.php">
      <?php


//include ("../db/config.php");

$id=$_GET['id'];
$sql="SELECT * FROM c_info WHERE action=0 AND c_id='$id' ";
$result=mysqli_query($myconnect,$sql);
while($row=mysqli_fetch_array($result))
{

$id=$row['c_id'];
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
 
//echo ' <p> Id: <input type="number" name="id" value="'.$id.'"readonly> <br> Name:<input type="text"</p>';

}

?>
<table border="" width="100%"> 
<tr><td> Id:</td><td><input type="number" name="id" value=<?= $id; ?>></td></tr> 
<tr><td> name:</td><td><input type="text" name="name" value="<?= $name; ?>"></td></tr> 
<tr><td> email:</td><td><input type="email" name="email" value="<?= $email; ?>"readonly></td></tr> 
<tr><td> password:</td><td><input type="text" name="password" value="<?= $password; ?>"></td></tr> 
</table>
      
          
<input type="submit" value="Update" onclick="return confirm()">
      
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
