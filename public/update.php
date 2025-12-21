<?php 
session_start();
include "connect.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $_SESSION["foodid"] = $_GET["id"];
    $command = "SELECT * FROM food where food_id = '$id'";
    if($selectedFood = $connect->query($command)){
        $row = $selectedFood->fetch_assoc();
        $size  = "SELECT * FROM food_size WHERE food_id = '$id'";
        $selectsize = $connect->query($size);
        $row1 = $selectsize->fetch_assoc();
    }
}
$id = $_SESSION["foodid"];
    // updating
    if($_SERVER["REQUEST_METHOD"] === "POST"){
     $fName = $_POST["fName"];
    $price = $_POST["price"];
    $imgurl = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./images/".$imgurl;
    $size = $_POST["size"];

    $command1 = "UPDATE food SET food_name ='$fName', price='$price', imgurl= '$imgurl' WHERE food_id='$id' AND food_name = '$fName'";
    move_uploaded_file($tempname,$folder);
    if($connect->query($command1)){
             $insertsize = "UPDATE food_size SET food_id = '$id' , size= '$size' WHERE food_id = '$id' ";
            if($connect->query($insertsize)){
                header("location:allfoods.php");
            }
            else{
                header("location:allfoods.php");
                echo '<h1 class="text-xl font-normal text-red-500 bg-white p-4 rounded shadow absolute top-10 left-5">Data could not updated</h1>';
            }
        }

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="h-screen w-full flex justify-center items-center">
        <form action=<?php echo $_SERVER["PHP_SELF"] ?> enctype="multipart/form-data" method="post"  class="shadow-md flex flex-col items-center gap-3 p-4 rounded h-96 w-[30%]">
            <h1 class="text-center font-bold text-3xl text-blue-700 p-2">Update Food</h1>
            <input value="<?php echo $row["food_name"] ?>" type="text" name="fName" placeholder=" Enter food name" class="border rounded-full focus:outline-blue-700 focus:outline-1 p-2 w-[90%] outline-0 ">
            <input value="<?php echo $row["price"] ?>" type="text" name="price" placeholder=" Enter the price" class="border rounded-full focus:outline-blue-700 focus:outline-1 p-2 w-[90%] outline-0 ">
            <?php $file ; ?>
            <input value="<?php echo $row["imgurl"] ?>" type="file" name="image" id="file" placeholder=" Enter food name" class="border rounded-full focus:outline-blue-700 focus:outline-1 p-2 w-[90%] outline-0">
            <select name="size" class="border w-[90%] rounded-full p-2  outline-0 ">
                <option value="<?php echo $row1['size'] ?>" ><?php echo $row1['size'] ?></option>
                <option value="small" >small</option>
                <option value="medium">medium</option>
                <option value="large">large</option>
            </select>
            <button class="px-6 hover:cursor-pointer rounded-full py-2 bg-blue-700 w-[90%] text-white font-bold">Update</button>
        </form>
        <div class="h-96 w-[30%] rounded-l-sm">
            <img src="./images/<?php echo $row['imgurl'] ?>" class="h-full w-full rounded-r-sm" alt="">
        </div>
    </div>
</body>
</html>