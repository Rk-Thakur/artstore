<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM orderdetails WHERE oid = $id ";
$result=mysqli_query($conn,$query);
header ("Location:  order.php");   
?>