<?php
if(isset($_POST['submit'])){
    $username= $_POST['uname'];
    $password = $_POST['password'];
    

    
        include_once("config.php");
        $sql = "INSERT INTO login(username,password)
        Values('$username','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo"New Record is uploaded";
            header("Location: login.php");
            // header("Location: displayclasswork.php");
        }else{
            "Record not uploaded".mysqli_error($conn);
        }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    
</head>
<body>


    
<!--account page-->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="../images/image1.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
<div class="form-btn">
    <span onclick="login()">Login</span>
    <span onclick="register()">Register</span>
    <hr id="Indicator">
</div>
<?php
include_once("config.php");
if(isset($_POST['login'])){

    $username= $_POST['uname'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM login
            where username='$username' AND password= '$password' ";
    $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['uname'] = $username;
        
        header("Location: dashboard.php");
        
    }else{
        echo "login failed";
    }


}
?>
<form id="LoginForm" action ="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" placeholder="Username" name="uname" required  >
    <input type="password" placeholder="password" name="password" required >
    <button type="submit"  name="login" class="btn">Login</button>
</form>

<form id="RegForm" action="<?php echo $_SERVER['PHP_SELF'] ?> " method ="POST">
    <input type="text" placeholder="Username" name="uname" required disabled>
    <input type="password" placeholder="Password" name="password" required disabled>
    <button type="submit" name="submit" class="btn" disabled>Register</button>
    
</form>
                </div>
            </div>
        </div>
    </div>

<!---------Footer-------->

<!-----js for toggle menu-->
<script>
    var MenuItems= document.getElementById("MenuItems");
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

<!-----js for toggle form-->

<script>
var LoginForm=document.getElementById("LoginForm");
var RegForm=document.getElementById("RegForm");
var Indicator=document.getElementById("Indicator");
function register(){
    RegForm.style.transform= "translateX(0px)";
    LoginForm.style.transform= "translateX(0px)";
    Indicator.style.transform= "translateX(100px)";
}

function login(){
    RegForm.style.transform= "translateX(300px)";
    LoginForm.style.transform= "translateX(300px)";
    Indicator.style.transform= "translateX(0px)";
}

</script>




</body>
</html>