<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>

<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#product">Product</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
            </nav>
        
        </div>
    

<section class="text-gray-600 body-font">
<?php
    include('admin/config.php');
    $query="SELECT * FROM about ORDER BY id desc LIMIT 1 ";
    
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
    
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
        <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="blog" class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded">'; ?>

        <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><?php echo $row['topic']; ?></h1>
        <p class="mb-8 leading-relaxed"><?php echo $row['description']; ?>.</p>

    </div>
    </div>
    <?php 
                            }
                            }               
                        ?>

</section>
</div>
</div>

<!---------Footer-------->
        

<!-----js for toggle menu-->
<script>
    var MenuItems=document.getElementById("MenuItems");
    MenuItems.style.maxHeight="0px";
    function menutoggle(){
        if( MenuItems.style.maxHeight=="0px")
        {
            MenuItems.style.maxHeight="200px";
        }
        else
        {
            MenuItems.style.maxHeight="0px"
        }
    }
</script>
</body>
</html>