<?php 
include "connect.php";
$dastor = "select * from food";
$allfood = $connect->query($dastor);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../fontawesome-free-6.7.2-web/css/all.min.css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
       <nav class='h-20 px-3 bg-black/40 sticky w-full flex items-center text-white border-b-[1px] border-b-white'>
      <div class='w-full h-full flex justify-between items-center'>
        <img src="../public/images/logo.png" alt="" class='h-full w-20 rounded-full'>
        <ul class='flex flex-row gap-20 text-[20px] items-center'>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Our menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
       <div class="h-fit">
         <button class='font-bold rounded-md px-6 text-[18px] h-10 bg-green-700 text-white '> <a href="login.php">Login</a></button>
        <button class=' font-bold rounded-md px-6 text-[18px] h-10 bg-green-700 text-white '> <a href="insertAdmin.php">Sign up</a></button>
      </div>
      </div>
     </nav>
     <!-- nav end -->
      <!-- menu start -->
       <?php
      if($allfood->num_rows>0){
        ?>
        <div class="w-full h-fit bg-[url(../public/images/burger-with-melted-cheese.jpg.webp)]  bg-cover gap-2 grid grid-cols-4 items-center justify-around">
              <?php 
            while($row = $allfood ->fetch_assoc()){
                ?>    
        <div class="flex flex-col items-center justify-center h-[100%] w-[90%] rounded bg-orange-700  mt-3">
                 <img class="h-54 w-[80%] rounded" src="./images/<?php echo $row ['imgurl'] ?>" alt="">
                <div class="w-full flex gap-7 justify-around text-white">
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['food_name'] ?></h1>
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['price'] ?>AF</h1>
                </div>
                <button>
                <a class="text-2xl text-white font-bold" href="more.php?id=<?php echo $row['food_id'] ?>">More</a>
                </button>
                 </div>
                <?php } ?>
             
              </div>
        <?php } ?>
        <!-- footer start -->
        <footer class="bg-gray-900 text-white py-10 mt-10">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <div>
      <h3 class="text-lg font-semibold mb-4">About Us</h3>
      <p class="text-gray-200 text-sm">We serve fresh & delicious food with love. Visit us and enjoy your meal.</p>
    </div>

    <div>
      <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
      <ul class="space-y-2 text-sm text-gray-300">
        <li><a href="#" class="hover:text-white">Home</a></li>
        <li><a href="#" class="hover:text-white">Contact</a></li>
        <li><a href="#" class="hover:text-white">About</a></li>
      </ul>
    </div>

    <div>
      <h3 class="text-lg font-semibold mb-4">Follow Us On</h3>
      <div class="flex space-x-4 text-xl text-gray-300">
 <a href="#"><i class="fab fa-facebook-f hover:text-white"></i></a>
        <a href="#"><i class="fab fa-instagram hover:text-white"></i></a>
        <a href="#"><i class="fab fa-twitter hover:text-white"></i></a>
        <a href="#"><i class="fab fa-youtube hover:text-white"></i></a>
      </div>
    </div>
  </div>

  <div class="mt-10 text-center text-sm text-white border-t border-gray-700 pt-4">
 <h1>   © 2025 YourRestaurant. All rights reserved.</h1>
  </div>
</footer>
</body>
</html>