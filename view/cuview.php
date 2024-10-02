<?php
include ("../db/config.php");

$sql="SELECT * FROM c_info WHERE action=1 OR action=0";
$result=mysqli_query($myconnect,$sql);


echo '<table border="2px" width="100%">
<row> <th width="20%"> ID </th><th width="20%"> Username </th><th width="20%"> Email </th><th width="20%"> Password </th> <th width="20%" colspan="3"> Action </th></row>
';

while($row=mysqli_fetch_array($result)) {
	$id=$row['c_id'];
	$name=$row['name'];
	$email=$row['email'];
	$password=$row['password'];

	echo '<tr> <td>'.$id.'</td>
	<td>'.$name.'</td>
	<td>'.$email.'</td>
	<td>'.$password.'</td>
	<td><a href="edit.php? id='.$id.'">Edit</a></td>
	<td><a href="../model/delete.php?id='.$id.'" onclick="return confirm()">HDelete</a></td>
	<td><a href="../model/softdelete.php?id='.$id.'" onclick="return confirm()">SoftDelete</a></td>
	</tr>  ';
}
echo '</table>'
?>
