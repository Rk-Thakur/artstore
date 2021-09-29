<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    	 <!--Regular Datatables CSS-->
	 <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	 <!--Responsive Extension Datatables CSS-->
	 <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
	 
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>


</head>
<body>
<div class="offer">
    <div class="small-container">
    <?php
    include('admin/config.php');
    $query="SELECT * FROM art WHERE pieces=(SELECT MAX(pieces) FROM art)   LIMIT 1";
    
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
        <div class="row">
            <div class="col-2">
                <?php echo '<img src="admin/uploads/'. $row["file"].'"  class="offer-img">'; ?>

            </div>
            <div class="col-2">
                <p>Exclusively Available on ArtStore</p>
            <h1><?php echo $row['topic'] ?></h1>
            <small><?php echo $row['description'] ?></small><br>
                <a href="buyingform.php" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
        <?php
        }
    }
        ?>
    </div>
</div>
<script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var userMenuDiv = document.getElementById("userMenu");
    var userMenu = document.getElementById("userButton");

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //User Menu
        if (!checkParent(target, userMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else { userMenuDiv.classList.add("invisible"); }
            } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
            }
        }

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else { navMenuDiv.classList.add("hidden"); }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) { return true; }
            t = t.parentNode;
        }
        return false;
    }
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		
	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {
			
			var table = $('#example').DataTable( {
					responsive: true
				} )
				.columns.adjust()
				.responsive.recalc();
		} );
	
	</script>
</body>
</html>
