<?php
include_once("admin/config.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
        $sql = "INSERT INTO  message(name,email,message) Values('$name','$email','$message')";
    $result= mysqli_query($conn,$sql);
    if($result){
        // echo "data inserted into contact table";
    }else{
        // echo"data not inserted".mysqli_error($conn);
    }
    }

?>



<section class="text-gray-600 body-font relative" id="contact">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
          <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <img src="images/category-2.jpg" height="100%" width="100%" class="absolute inset-0" alt="">
            <div class="bg-gray-200 relative flex flex-wrap py-6 rounded shadow-md">
              <div class="lg:w-1/2 px-6">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                <p class="mt-1">Kalimati,Takari Bazzar,Kathmandu</p>
              </div>
              <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                <a class="text-blue-500 leading-relaxed">kabitaacharya100@gmail.com</a>
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                <p class="leading-relaxed">9868153290/9865497281</p>
              </div>
            </div>
          </div>

          <div class="lg:w-1/3 md:w-1/2 bg-gray-300 rounded-lg p-4 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  
          <h2 class="text-gray-900 text-2xl mb-1 font-medium title-font">Contact Us</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Feel Free to Contact</p>

            <div class="relative mb-4">
              <label for="name" class="leading-7 text-sm text-xl text-gray-600">Name</label>
              <input  required type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-xl text-gray-600">Email</label>
              <input required  type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="message" class="leading-7 text-sm text-xl text-gray-600">Message</label>
              <textarea  required id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg" name="submit">Contact</button>
          </div>
        </form>

        </div>
      </section>