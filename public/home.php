<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../src/output.css">
    <style>
        #hero{
            background-image: url('../public/images/hero.jpg');
            background-repeat:no-repeat;
        }
    </style>
</head>
<body>
    <div class="h-screen bg-center bg-conic-180  bg-cover w-full" id="hero">
    <!-- nav  started -->
     <?php
      include "navbar.php";
     ?>
     <!-- nav ended -->
      <!-- hero started -->
      <h1 class="text-8xl moto font-bold p-20" >The Delicious Way <span class="block ">to Eat <i>Healthy.</i></span></h1>
      <h1 class="text-white pl-20 text-[20px] -mt-10 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente<span class="block "> fuga eaque voluptas temporibus provident hic aliquid nemo officia  </span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
      <button class="px-5 ml-20 mt-8 hover:cursor-pointer py-4 font-semi-bold hover:border hover:bg-black bg-green-700 text-white transition-colors duration-700 rounded-md hover:opacity-90"><a href="insertAdmin.php">Get Started</a></button>
    </div> 
      

       <!-- hero ended -->
        <!-- about strated -->
     <h1 class="text-green-700 text-center text-3xl font-bold p-8">About us</h1>
     <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto amet temporibus quod est deserunt exercitationem vel, eos explicabo provident illo. Earum, ratione cupiditate reiciendis temporibus commodi labore vel exercitationem quas.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum saepe sequi accusantium impedit dolor quisquam sint optio laboriosam atque, hic, a voluptatum dolorem magnam. Libero quam molestias saepe? Nostrum, consequuntur? 
     </p>
         <!-- about ended -->
        <div class="mt-16 z-20">
  <h1 class="text-2xl font-bold text-green-700 font-2xl p-12 uppercase text-center">The special dishes</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <img src="./images/another header.jpg" alt="Food 1" class="rounded-lg h-100 shadow hover:scale-105 transition duration-300">
    <img src="./images/spe1.jpg" alt="Food 2" class="rounded-lg h-100 shadow hover:scale-105 transition duration-300">
    <img src="./images/header1.jpg" alt="Food 3" class="rounded-lg h-100 shadow overflow-x-hidden transition duration-300">
    <img src="./images/spe3.jpg" alt="Food 4" class="rounded-lg h-100 shadow w-130 hover:scale-105 transition duration-300">
    <img src="./images/spe4.jpg" alt="Food 5" class="rounded-lg h-100 shadow w-130 hover:scale-105 transition duration-300">
    <img src="./images/pasta.webp" alt="Food 6" class="rounded-lg h-100 w-130 shadow transition duration-300">
  </div>
  <a href="allfoods.php" class="text-center">See all →</a>
</div>
 <!-- footer -->
  <?php
    include "footer.php";
  ?>

  <!-- footer -->
        
</body>
</html>