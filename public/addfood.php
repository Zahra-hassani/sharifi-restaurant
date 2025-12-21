<?php
include("connect.php");

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $fName = $_POST["fName"];
    $price = $_POST["price"];
    $imgurl = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./images/".$imgurl;
    $size = $_POST["size"];

    $select = "SELECT * FROM food WHERE food_name= '$fName'and price= '$price'";
    $selectedFood = $connect->query($select);
    if($selectedFood->num_rows === 0){
        $command = "INSERT INTO food(food_name,price,imgurl) VALUES('$fName','$price','$imgurl')";
        move_uploaded_file($tempname,$folder);
        if($connect->query($command)===true){
            // $selectid = "SELECT food_id FROM food WHERE food_id= '$fName'";
            // $foodid = $connect->query($selectid);
            // $id = $foodid->fetch_assoc();
            $insertsize = "INSERT INTO food_size(food_id,size) VALUES(LAST_INSERT_ID(),'$size')";
            if($connect->query($insertsize)===true){
                header("location:allfoods.php");
            }
            else{
                header("location:addfood.php");
            }

        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add food</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="h-screen w-full flex justify-center items-center" style="background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1840' height='960' preserveAspectRatio='none' viewBox='0 0 1840 960'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1224%26quot%3b)' fill='none'%3e%3crect width='1840' height='960' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M599.13 29.06 a187.84 187.84 0 1 0 375.68 0 a187.84 187.84 0 1 0 -375.68 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M288.36 336.42 a171.98 171.98 0 1 0 343.96 0 a171.98 171.98 0 1 0 -343.96 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1753.8109595146063 737.4535084897741L1577.6039746077672 851.8836624627146 1692.0341285807078 1028.0906473695538 1868.241113487547 913.6604933966132z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M164.75 903.77 a208.98 208.98 0 1 0 417.96 0 a208.98 208.98 0 1 0 -417.96 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1224'%3e%3crect width='1840' height='960' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e")">
        <form action=<?php echo $_SERVER["PHP_SELF"] ?> enctype="multipart/form-data" method="post"  class="shadow-md flex flex-col items-center gap-3 p-4 rounded h-[60%] w-[40%]">
            <h1 class="text-center font-bold text-3xl text-blue-700 p-2">Add Food</h1>
            <input type="text" name="fName" placeholder=" Enter food name" class="border rounded-full focus:outline-blue-700 focus:outline-1 w-[50%] p-2 outline-0 ">
            <input type="text" name="price" placeholder=" Enter the price" class="border rounded-full focus:outline-blue-700 focus:outline-1 w-[50%] p-2 outline-0 ">
            <input type="file" name="image" placeholder=" Enter food name" class="border rounded-full focus:outline-blue-700 focus:outline-1 w-[50%] p-2  outline-0">
            <select name="size" class="border  rounded-full w-[50%] p-2  outline-0 ">
                <option class="hover:bg-blue-700 hover:text-white" value="small">small</option>
                <option class="hover:bg-blue-700 hover:text-white" value="medium">medium</option>
                <option class="hover:bg-blue-700 hover:text-white" value="large">large</option>
            </select>
            <button class="px-6 w-[50%] hover:cursor-pointer rounded-full py-2 bg-blue-700 text-white font-bold">Save</button>
        </form>
    </div>
</body>
</html>