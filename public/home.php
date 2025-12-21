<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
     <nav class='h-20 p-3 bg-black/40 w-full sticky top-0 text-white border-b-[1px] border-b-white'>
      <div class='flex justify-between'>
        <img src="../public/images/logo.png" alt="" class='h-full w-14 rounded-full'>
        <ul class='flex flex-row gap-20 text-[20px] items-center'>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Our menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
       <div class="flex gap-8"><button class=' font-bold rounded-md px-4 text-[18px] hover:border hover:bg-black bg-green-700 text-white '> <a href="login.php">Login</a></button>
        <button class=' font-bold rounded-md px-4 text-[18px] bg-green-700 text-white hover:border hover:bg-black '> <a href="insertAdmin.php">Sign up</a></button>
      </div></div>
     </nav>
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
        <div class="mt-16">
  <h1 class="text-2xl font-bold text-green-700 font-2xl p-12 uppercase text-center">The special dishes</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <img src="./images/another header.jpg" alt="Food 1" class="rounded-lg h-100 shadow hover:scale-105 transition duration-300">
    <img src="./images/spe1.jpg" alt="Food 2" class="rounded-lg h-100 shadow hover:scale-105 transition duration-300">
    <img src="./images/header1.jpg" alt="Food 3" class="rounded-lg h-100 shadow overflow-x-hidden transition duration-300">
    <img src="./images/spe3.jpg" alt="Food 4" class="rounded-lg h-100 shadow w-130 hover:scale-105 transition duration-300">
    <img src="./images/spe4.jpg" alt="Food 5" class="rounded-lg h-100 shadow w-130 hover:scale-105 transition duration-300">
    <img src="./images/pasta.webp" alt="Food 6" class="rounded-lg h-100 w-130 shadow transition duration-300">
  </div>
</div>
 <!-- footer -->
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

  <!-- footer -->
        
</body>
</html>