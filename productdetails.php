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

<div class="header"></div>
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
</div>
<!-------------------single product details------------->
<?php
                  include_once('admin/config.php');
                  $id=$_REQUEST['id'];
                  $sql="SELECT * FROM art where id=$id LIMIT 1";
                  $result=mysqli_query($conn,$sql);
                        if($result)
                        {
                            $row=mysqli_fetch_assoc($result);
                            

                        }
                        ?>
                        
<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="hero" class="lg:w-1/2 w-full lg:h-auto h-64 object-fill object-center rounded">'; ?>

        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">Art Store</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?php echo $row['topic'] ?></h1>
          <div class="flex mb-4">
            
            
          </div>
          <p class="leading-relaxed"><?php echo $row['description'] ?></p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
            <div class="flex">
            </div>
            <div class="flex ml-6 items-center">
              
            </div>
          </div>
          <div class="flex">
            <!-- <span class="title-font font-medium text-2xl text-gray-900">Rs.<?php
            // echo $row['price'];
            ?></span> -->
            <button class="flex ml-auto text-black bg-gray-300 border-0 py-2 px-6 focus:outline-none hover:bg-gray-500 rounded">  <a href="buyingform.php">Order</a> </button>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--title-->
<div class="small-container">
    <div class="row">
        <div class="row row-2">
            <h1 >Related Products</h1> 
        </div>
    </div>
</div>
<!--Products-->
<div class="small-container">

    <div class="row ">

    <?php
    include('admin/config.php');
    $query="SELECT * FROM art  WHERE type='Feature' ORDER BY id desc LIMIT 4";
    
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
        <div class="col-4">
        <a href="productdetails.php?id=<?php echo $row['id'];?>">
            <?php echo '<img src="admin/uploads/'. $row["file"].'" >'; ?>

          </a>             <h4><?php echo $row["topic"]; ?></h4>
            
            <!-- <p>Rs <?php
            //  echo $row["price"];
              ?></p> -->
        </div>

        <?php 
    }
    }               
    ?>


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
            MenuItems.style.maxHeight="0px";
        }
    }
</script>







<!--js for product gallery-->
<script>
    var ProductImg=document.getElementById("ProductImg");
    var SmallImg=document.getElementsByClassName("small-img");
    SmallImg[0].onclick= function()
    {
        ProductImg.src=SmallImg[0].src;
    }
    SmallImg[1].onclick= function()
    {
        ProductImg.src=SmallImg[1].src;
    }
    SmallImg[2].onclick= function()
    {
        ProductImg.src=SmallImg[2].src;
    }
    SmallImg[3].onclick= function()
    {
        ProductImg.src=SmallImg[3].src;
    }
</script>
</body>
</html>