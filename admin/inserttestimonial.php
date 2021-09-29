<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<?php
include_once('config.php');
if(isset($_POST['submit']))
{
    
    $name=$_POST['fullname'];
    $message = $_POST['feedback'];

$sql="INSERT into testimonial(fullname,feedback) values('$name','$message')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"Data inserted";
    header("Location: testinomial.php");
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
    <title>Feedback</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    



<div class="flex items-center h-screen w-full bg-gray-300">

  <div class="w-full bg-white rounded  p-8 m-4 md:max-w-sm ">

    <h1 class=" w-full text-center text-2xl font-bold  text-grey-darkest mb-6">FeedBack Testimonial</h1>

    <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase  font-bold text-lg text-grey-darkest" >Name:</label>
        <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="fullname" required>
      </div>
      <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="Description">Testimonial</label>
      <textarea class="border py-2 px-3 text-grey-darkest" name="feedback"  type="text"  cols="30" rows="5" required>
      </textarea>
      
      

      <button class="block   text-white bg-gray-900   uppercase  mx-auto p-4 rounded" type="submit" name="submit">
      Upload
      </button>
      
    </form>
    
  </div>
  <div class="info " >
    <p class=" text-5xl text-center font-bold m-5">Message Details</p>
  <table class="rounded-lg m-5 w-5/6 mx-auto bg-white text-gray-800">
<thead>
<tr class="text-left border-b-4 border-gray-900">
    <th class="px-4 py-3 text-center">Id</th>
    <th class="px-4 py-3 text-center">Name</th>
    <th class="px-4 py-3 text-center">Message</th>
</tr>
</thead>
<tbody>
<tr>
<?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM message ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr>
                <td class="px-4 py-3 text-center"><?php echo $count; ?></td>
                <td class="px-4 py-3 text-center"><?php echo $row['name']; ?></td>
                <td class="px-4 py-3 text-center"><?php echo $row["message"]; ?></td>
                    
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
</tr>
</table>
  </div>



  
</body>
</html>



