<?php
include("../db/config.php");

$sql="SELECT * FROM c_info WHERE action=1";

$result=mysqli_query($myconnect,$sql);

echo'<table border="2px"> <tr> <th>Id</th><th>Name</th><th>Email</th><th>Password</th>';

while($row=mysqli_fetch_array($result)) {
    $id=$row['c_id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
        echo'<tr> <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        ';
}
echo '</table>'
?>
