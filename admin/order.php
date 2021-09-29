<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art Store</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
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

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">


        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                    <i class="fas fa-sun text-pink-600 pr-3"></i> Art Store Admin Day Mode
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <span class="hidden md:inline-block">Hi, <?php  echo $_SESSION['uname'] ?> </span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                
                                <li><a href="logout.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white z-20" id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="dashboard.php" class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600">
                            <i class="fas fa-home fa-fw mr-3 text-pink-600"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="todotask.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-pink-500">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Tasks</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="message.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-purple-500">
                            <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Messages</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="testinomial.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-green-500">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">FeedBack/Testimonials</span>
                        </a>
                    </li>
                    <!-- <li class="mr-6 my-2 md:my-0">
                        <a href="payments.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-red-500">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Payments</span>
                        </a>
                    </li> -->
                    <li class="mr-6 my-2 md:my-0">
                        <a href="order.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-red-900">
                            <i class="fas fa-users fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Users/Orders</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="featuredart.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-red-900">
                            <i class="fas fa-users fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Art</span>
                        </a>
                    </li>
                    
                </ul>

                

            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

            <!--Console Content-->

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-green-600"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Total Revenue</h5>
                                <?php
                                include_once("config.php");
                
                    $sql="SELECT c.fullname,file,price,SUM(price) as total
                    FROM orderdetails AS c 
                    INNER JOIN art AS a
                    ON c.id = a.id";
                    $result=mysqli_query($conn,$sql);
                    if($result){                 
                    while($row=mysqli_fetch_assoc($result)){?>
                                <h3 class="font-bold text-3xl">Rs.<?php echo "0" ?>  <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                                <?php
                    }
                  }
                  ?>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Total Users</h5>
                                <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT COUNT(oid) as total FROM orderdetails ";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                                <h3 class="font-bold text-3xl"><?php echo $row['total']; ?> <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                                <?php
                    }
                  }
                  ?>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">New Users</h5>
                                <?php
                  include_once("config.php");
                  date_default_timezone_set("Asia/Kathmandu");
                    $today= date('Y-m-d');
                  $sql="SELECT *, COUNT(oid) as total FROM orderdetails WHERE  Date='$today' ";
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                                <h3 class="font-bold text-3xl"><?php echo $row['total']; ?>   <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                                <?php
                    }
                  }
                  ?>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-red-600"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">To Do List</h5>
                                <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT COUNT(message) as total FROM todo ";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                                <h3 class="font-bold text-3xl"><?php echo $row['total']; ?> tasks </h3>
                                <?php
                    }
                  }
                  ?>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-indigo-600"><i class="fas fa-sms fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Message</h5>
                                <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT COUNT(id) as total FROM message ";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                                <h3 class="font-bold text-3xl"> <?php echo $row['total']; ?> </h3>

                                <?php
                    }
                  }
                  ?>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-gray-600"><i class="fas fa-paint-brush fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Arts</h5>
                                <?php
                                include_once("config.php");
                                    $sql="SELECT COUNT(id) as total FROM art ";
                                        $result=mysqli_query($conn,$sql);
                                    if($result){                 
                                    while($row=mysqli_fetch_assoc($result)){?>
                                <h3 class="font-bold text-3xl"> <?php echo $row['total']; ?> </h3>
                                <?php
                                    }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                
            </div>

            <!--Divider-->
            <hr class="border-b-2 border-gray-400 my-8 mx-4">
            <div class="flex flex-row flex-wrap flex-grow mt-2">

                

                

                

                

                

                <div class="w-full ">
                    <!--Table Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">Order Details Users</h5>
                        </div>
                        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
				
				<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>
						<tr>
							<th data-priority="2">Customer Name</th>
							<th data-priority="3">Image</th>
							<th data-priority="4">Phone</th>
							<th data-priority="5">Email</th>
							<th data-priority="6">Address </th>
							<th data-priority="7">Payment</th>
							<th data-priority="8">Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                    include_once("config.php");

                    $sql="SELECT c.fullname,file,phone,email,address,payment,oid
                    FROM orderdetails AS c 
                    INNER JOIN art AS a
                    ON c.id = a.id
                    ORDER BY oid desc";
                    $result=mysqli_query($conn,$sql);
                    if($result){                 
                    while($row=mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?php echo $row['fullname']; ?></td>
                            <td> <?php echo '<img src="uploads/'. $row["file"].'" alt="blog" class="object-full object-center h-52 w-52">'; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['payment']; ?></td>
                            <td ><a href="deleteorder.php?id=<?php echo $row['oid']; ?>"><i class="fas fa-trash"></i></a></td>


						</tr>
                        <?php
                        }
                    }
                    ?>
						
						
						
					</tbody>
					
				</table>
				
				
			</div>
                    </div>
                </div>


            </div>

            
        </div>
    </div>
    <!--/container-->


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
