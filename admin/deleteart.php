<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM art WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location:  featuredart.php");   
?>