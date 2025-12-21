<?php
session_start();
include "connect.php";
$start = 0;
$num_of_foods_per_page = 5;
if(isset($_SESSION['username'])){
    $dastor = "select f.food_id,f.food_name,f.price,f.imgurl,s.size from food as f inner join food_size as s on f.food_id = s.food_id order by f.food_name asc limit $start,$num_of_foods_per_page";
    $allfood = $connect->query($dastor);
}
else{
    header("location:login.php");
}
$result = $connect->query( "Select * From food");
$num_rows = $result->num_rows;
$pages =ceil( $num_rows/$num_of_foods_per_page);
if(isset($_GET["page_nr"])){
    $nr_page = $_GET["page_nr"] -1;
    $start = $nr_page * $num_of_foods_per_page;
      $dastor = "select f.food_id,f.food_name,f.price,f.imgurl,s.size from food as f inner join food_size as s on f.food_id = s.food_id order by f.food_name asc limit $start,$num_of_foods_per_page";
    $allfood = $connect->query($dastor);
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
    
     <!-- nav is endedd -->
       <nav class='h-20 p-3 bg-black/40 w-full fixed top-0 text-white border-b-[1px] border-b-white'>
      <div class='flex justify-between'>
        <img src="../public/images/logo.png" alt="" class='h-full w-14 rounded-full'>
        <ul class='flex flex-row gap-20 text-[20px] items-center'>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Our menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <button class=' font-bold rounded-md px-6 text-[18px] bg-green-700 text-white '> <a href="insertAdmin.php">Login</a></button>
      </div>
     </nav>
      <?php
      if($allfood->num_rows>0){
        ?>
        <table class="w-[60%] mx-auto rounded bg-transparent mt-24">
            <tr class="bg-green-700 text-white">
                <th class="text-center px-3 py-5">Food name </th>
                <th class="text-center px-3 py-2">Size </th>
                <th class="text-center px-3 py-2">Price </th>
                <th class="text-center px-3 py-2">image </th>
                <th class="text-center px-3 py-2">Delete</th>
                <th class="text-center px-3 py-2">update</th>
            </tr>
            <?php 
            while($row = $allfood ->fetch_assoc()){
                $_SESSION["id"] = $row["food_id"];
                $food_id = $_SESSION["id"];
                ?>
                <tr class="odd:bg-gray-100 even:bg-gray-300 text-black hover:text-green-700">
                    <td class="text-center px-3 py-1"><?php echo $row ['food_name'] ?></td>
                    <td class="text-center px-3 py-1"><?php echo $row ['size'] ?></td>
                    <td class="text-center px-3 py-1"><?php echo $row ['price'] ?></td>
                    <td class="text-center px-3 py-1"><img class="h-16 w-16 rounded-full mx-auto" src="./images/<?php echo $row['imgurl'] ?>" alt=""></td>
                    <td class="text-center px-3 py-1"><a href="delete.php?id=<?php echo $food_id ?>">Delete</a></td>
                    <td class="text-center px-3 py-1"><a href="update.php?id=<?php echo $food_id ?>">update</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <div class="w-full flex pl-[40%] mt-16">
            <div>
                <a class="border p-2 bg-gray-400 text-white rounded-sm" href="?page_nr=1">First</a>
                <a  class="border bg-gray-400 text-white p-2" href="">Next</a>

                <?php 
                for($i = 1;$i<= $pages;$i++){
                    ?>
                   <a class="border p-2 rounded-sm text-white bg-green-700" href="?page_nr<= <?php  echo $i ?>"><?php echo $i ?></a>
                   <?php
                ?>
                <?php }?>
                <a class="border p-2 bg-gray-400 text-white" href="">Prevoius</a>
                <a class="border p-2 text-white rounded-sm bg-gray-400" href="?page_nr=<?php echo $pages ?>">Last</a>
            </div>
        </div>
        <?php
      }
      ?>
</body>
</html>