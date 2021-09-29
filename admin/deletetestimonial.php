<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM testimonial WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location:  testinomial.php");   
?>