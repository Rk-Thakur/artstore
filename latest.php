<h2 class="title">Latest Art</h2>
    <div class="row">
    <?php
    include('admin/config.php');
    $query="SELECT * FROM art WHERE type='Latest' ORDER BY id desc LIMIT 4";
    
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
    <div class="col-4">
        <?php echo '<img src="admin/uploads/'. $row["file"].'" >'; ?>

        <h4> <?php echo $row["topic"]; ?></h4>
        
        <!-- <p>Rs <?php 
        // echo $row["price"];
        ?></p> -->
    </div>


    <?php 
    }
    }               
    ?>
</div>


    
    