
<?php
include_once('admin/config.php');
if(isset($_POST['submit']))
{
    
    $name=$_POST['fullname'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];

    $email=$_POST['email'];
    $imageid=$_POST['id'];
    $imagename=$_POST['image_name'];
    $payment=$_POST['payment'];

$sql="INSERT into orderdetails(fullname,address,phone,email,id,image_name,payment) values('$name','$address','$phone','$email','$imageid','$imagename','$payment')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"Data inserted";
    header("Location: index.php");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    



<div class="flex items-center h-screen w-full bg-gray-300">

  <div class="w-full bg-white rounded  p-8 m-4 md:max-w-sm ">

    <h1 class=" w-full text-center text-2xl font-bold  text-grey-darkest mb-6">Thank You For Odering😎 💵</h1>

    <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase  font-bold text-lg text-grey-darkest" >Full Name:</label>
        <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="fullname" required>
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" >Address:</label>
        <input class="border py-2 px-3 text-grey-darkest md:ml-2"  placeholder="Full Address" type="text" name="address" required >
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" >Phone Number:</label>
        <input class="border py-2 px-3 text-grey-darkest md:ml-2"  placeholder="Full Address" type="number" name="phone" required >
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest">Email</label>
        <input class="border py-2 px-3 text-grey-darkest" type="email" name="email"
        required>
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest">Image_Id</label>
        <input class="border py-2 px-3 text-grey-darkest" type="number" name="id"
        required
        >
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest">Image Name</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="image_name"
        required
        >
      </div>

      <div class="p-2 w-1/2">
            <div class="relative">
            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest">Payment</label>
              <select name="payment" id="">
                <option value="" class="border py-2 px-3 text-grey-darkest">Select Option!!</option>
                <option value="Cash on Hand" >Cash On Hand</option>
                <option  value="Online Transaction">Online Payment</option>
              </select>
            </div>
          </div>

      <button class="block   text-white bg-gray-900   uppercase  mx-auto p-4 rounded" type="submit" name="submit">
      Done
      </button>
      
    </form>
    
  </div>

  <div class="info  overflow-scroll h-screen h-72" >
    <p class=" text-5xl text-center font-bold m-5">Image Details</p>
  <table class="rounded-lg m-5 w-5/6 mx-auto bg-white text-gray-800">
<thead>
<tr class="text-left border-b-4 border-gray-900">
    <th class="px-4 py-3 text-center">Image Id</th>
    <th class="px-4 py-3 text-center">Image Name</th>
    <th class="px-4 py-3 text-center">Image</th>
    <!-- <th class="px-4 py-3 text-center">Price</th> -->
</tr>
</thead>
<tbody>
<tr>
<?php
                  include_once("admin/config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM art ORDER BY id ASC";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr>
                <td class="px-4 py-3 text-center"><?php echo $row["id"]; ?></td>
                <td class="px-4 py-3 text-center"><?php echo $row["topic"]; ?></td>
                <td class="px-4 py-3 text-center"> <?php echo '<img src="admin/uploads/'. $row["file"].'"class=" h-42 w-72" >'; ?></td>
                <!-- <td class="px-4 py-3 text-center">Rs.<?php
                // echo $row["price"];
                ?></td> -->
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
</tr>
</table>
  </div>



  <div class="info  overflow-scroll h-screen h-72"  id="transaction">
    <p class="  text-center font-bold m-5">Online Transaction</p>
  <table class="rounded-lg m-5 w-5/6 mx-auto bg-white text-gray-800">
<thead>
<tr class="text-left border-b-4 border-gray-900">
    <th class="px-4 py-3 text-center">Esewa Details</th>
    
</tr>
</thead>
<tbody>

                  <tr>
                <td class="px-4 py-3 text-center"><img src="images/buy-1.jpg"  alt=""></td>
                </tr>
                  <tr>
                <td class="px-4 py-3 text-center text-xl text-bold">Kabita Acharya</td>
                </tr>

                
</table>
</div>

</body>
</html>



