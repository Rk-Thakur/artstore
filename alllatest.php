<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>

<div class="header"></div>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.html">Product</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        
    </div>
</div>

<div class="small-container" id="product">
<h2 class="title">Latest Art</h2>
    <div class="row">

    <?php
    include('admin/config.php');
    $query="SELECT * FROM art  WHERE type='Latest' ORDER BY id desc";
    
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
        <div class="col-4">
           <a href="productdetails.php?id=<?php echo $row['id'];?>">
            <?php echo '<img src="admin/uploads/'. $row["file"].'" >'; ?>

          </a> 
           <a href="productdetails.php?id=<?php echo $row['id'];?>"> <h4><?php echo $row["topic"]; ?></h4></a>
            <p>Rs <?php echo $row["price"]; ?></p>
        </div>

        <?php 
    }
    }               
    ?>


        

        

    

</div>
    
</div>

</div>  
