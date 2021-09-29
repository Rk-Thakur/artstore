<h2 class="title">Featured Art</h2>
    <div class="row">

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

          </a> 
           <a href="productdetails.php?id=<?php echo $row['id'];?>"> <h4><?php echo $row["topic"]; ?></h4></a>
            <!-- <p>Rs <?php
            // echo $row["price"];
            ?></p> -->
        </div>

        <?php 
    }
    }               
    ?>


        

        

    <div class="p-2 w-full">
    <button class="flex mx-auto text-black  border-0 py-2 px-2 focus:outline-none  rounded text-lg" href="allgallery.php">
      <a href="allgallery.php">
    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-8 ml-2" viewBox="0 0 24 24">
      <path d="M5 12h14M12 5l7 7-7 7"></path>
    </svg>
      </a>
    </button>
    </div>

</div>