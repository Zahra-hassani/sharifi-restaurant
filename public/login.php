<?php
include "connect.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $userName = $_POST["username"];
    $password = $_POST["password"];

    $command = "SELECT * FROM admin WHERE username ='$userName' AND pwd ='$password'";
    $selectedAdmin = $connect->query($command);
    if ($selectedAdmin->num_rows ===0) {
        echo "<h1 class='text-2xl absolute top-5 left-[50%] transition-transform translate-y-2'>The user name is not recognized</h1>";
    }
    else{
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
    <title>login page</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="h-screen w-full bg-[url(../public/images/bg3.jpg)] bg-cover bg-center bg-no-repeat flex justify-center items-center gap-4">
        <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" class="w-[32%] h-[55%] backdrop-blur-md bg-white/30 shadow-lg rounded-md p-3 flex flex-col gap-3">
            <h1 class="text-3xl font-bold text-center text-green-700 py-5">Login</h1>
            <input type="text" placeholder="user name" name="username" class="outline-0 placeholder:font-semibold border-[1px] border-gray-400 rounded-xl  px-3 py-1">
            <input type="password" placeholder="password" name="password" class="outline-0 placeholder:font-semibold border-[1px] border-gray-400 rounded-xl mt-3 px-3 py-1">
            <div class="flex justify-center gap-30 py-3">
                <p class="flex items-center gap-2"><input class="form-control h-4  w-4" type="checkbox">Remember me</p>
                <a href="#" class="hover:underline">forgot password?</a>
            </div>
            <button class="px-6 py-1.5 mt-3 cursor-pointer bg-green-700 rounded-xl text-white font-bold">Login</button>
        </form>
    </div>
</body>
</html>