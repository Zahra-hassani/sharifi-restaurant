<?php
session_start();
include "connect.php";
if(isset($_SESSION['username'])){
    $dastor = "select f.food_id,f.food_name,f.price,f.imgurl,s.size from food as f inner join food_size as s on f.food_id = s.food_id order by f.food_name";
    $allfood = $connect->query($dastor);
}
else{
    header("location:login.php");
}

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
    <div class="h-screen w-full flex justify-center items-center bg-[url(../public/images/bg1.jpg)] bg-center bg-cover bg-no-repeat relative" >
        <form action=<?php echo $_SERVER["PHP_SELF"] ?> enctype="multipart/form-data" method="post"  class="shadow-md bg-white/70 flex flex-col items-center gap-3 p-4 rounded h-[60%] w-md">
            <h1 class="text-center font-bold text-3xl text-green-700 p-2">Add Food</h1>
            <input type="text" name="fName" placeholder=" Enter food name" class="border rounded-full focus:outline-2 focus:outline-green-700 w-full p-2 outline-0 ">
            <input type="text" name="price" placeholder=" Enter the price" class="border rounded-full focus:outline-2 focus:outline-green-700 w-full p-2 outline-0 ">
            <input type="file" name="image" accept="image/*" placeholder=" Enter food name" class="border rounded-full focus:outline-2 focus:outline-green-700 w-full p-2  outline-0">
            <select name="size" class="border  rounded-full w-full p-2  outline-0 ">
                <option class="focus:bg-green-700 hover:text-white" value="small">small</option>
                <option class="focus:bg-green-700 hover:text-white" value="medium">medium</option>
                <option class="focus:bg-green-700 hover:text-white" value="large">large</option>
            </select>
            <button class="px-6 w-full hover:cursor-pointer rounded-full py-2 bg-green-700 text-white font-bold">Save</button>
        </form>
        <!-- <img src="./images/bg2.jpg" class="absolute h-full w-full -z-50 top-0 left-0 object-cover" alt=""> -->
    </div>
</body>
</html>