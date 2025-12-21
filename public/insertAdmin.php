<?php 
include "connect.php";
if($_SERVER['REQUEST_METHOD'] ==="POST"){
    $username= $_POST["name"];
    $password= $_POST["password"];

   $datsor = "INSERT INTO admin(username,pwd) VALUES('$username','$password')";
   $connect->query($datsor);
  
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
<div class="h-[70%] w-1/3 bg-transparent backdrop-blur-3xl shadow-sm shadow-gray-900 rounded-md">
    <h1 class=" text-center text-green-700 font-bold text-3xl mt-7">Sign up</h1>      
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class=" ml-16"> <input type="text" name="name" class="focus:outline-none border-[1px] border-gray-400 p-1.5 w-80 rounded-full mt-6" placeholder="username">
     <input type="password" name="password" class=" focus:outline-0 border-[1px] border-gray-400 p-1.5 w-80 rounded-full mt-8" placeholder="password">
</div>
      <div class="flex justify-evenly mt-5">
         <div class="flex gap-0"><input type="checkbox" class=""><span class=" ml-2">Remember me</span></div>
         <h1 class=" hover:cursor-pointer">Forgot Password?</h1>
      </div>
      <button class="p-2 w-80 rounded-full mt-8 hover:cursor-pointer bg-green-700 text-white ml-16 ">Sign up</button>
      <h1 class=" p-9 ml-12" >Don't have account?<span class="font-bold hover:cursor-pointer underline text-green-700">Create One!</span></h1>
</div>
      </form>
    </div>
</body>
</html>