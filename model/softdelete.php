<?php
include("../db/config.php");
$id=$_GET['id'];

$sodeletesql="UPDATE c_info SET action=0 WHERE c_id='$id'";

$deleteresult=mysqli_query($myconnect,$sodeletesql);
if($deleteresult===TRUE) {
    header("location:../model/cudetails.php");
} else {
    echo("data not in the database");
}
?>
