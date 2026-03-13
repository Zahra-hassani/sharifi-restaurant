<?php 
include "connect.php";
if($_SERVER['REQUEST_METHOD'] ==="POST"){
    $username= $_POST["name"];
    $password= $_POST["password"];

   $datsor = "INSERT INTO admin(username,pwd) VALUES('$username','$password')";
   if($connect->query($datsor)=== true){
    $command = "SELECT * FROM admin WHERE username ='$userName' AND pwd ='$password'";
    $selectedAdmin = $connect->query($command);
    // if user logged in
        session_start();
        $_SESSION["username"] = $userName;
        header("location:allfoods.php");
    
   }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="./fontawesome/fontawesome-free-6.7.2-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="bg-stone-100 h-screen w-full flex bg-[url(../public/images/bg1.jpg)] bg-cover bg-center bg-no-repeat justify-center items-center" >
<div class="h-fit py-4 w-1/3 bg-transparent backdrop-blur-3xl shadow-sm shadow-gray-900 rounded-md">
    <h1 class="text-center text-green-700 font-bold text-3xl py-4">Sign up</h1> 
    <p class="text-center">Create an account for free</p>     
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="flex flex-col items-center gap-4">
     <input type="text" name="name" class="focus:outline-none border-[1px] border-gray-400 p-1.5 w-80 rounded-full mt-6" placeholder="username">
     <input type="password" name="password" class=" focus:outline-0 border-[1px] border-gray-400 p-1.5 w-80 rounded-full" placeholder="password">
      <button class="p-2 w-80 rounded-full hover:cursor-pointer bg-green-700 text-white">Sign up</button>
      <p>Already have an account? <a href="/login.php" class="hover:underline hover:text-green-700">Login</a></p>
      </form>
    </div>
</body>
</html>