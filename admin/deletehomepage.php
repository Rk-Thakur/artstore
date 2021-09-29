<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM homepage WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: dashboard.php");   
?>