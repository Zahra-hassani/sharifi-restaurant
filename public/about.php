<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="p-0 m-0 ">
       <div class="h-screen bg-center bg-conic-180  bg-cover w-full gul"  id="hero">
    <!-- nav  started -->
     <nav class=' p-3 bg-black/40 text-white border-b-[1px] border-b-white'>
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
      </div></
      </div>
     </nav>
     
     <!-- nav ended -->
      <!-- section started -->
<section class="bg-white py-16 px-6">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
    <div>
      <h2 class="text-4xl font-bold text-black mb-4">About Us</h2>
      <p class="text-black text-lg leading-relaxed">
        We are a team of passionate developers and designers dedicated to building modern, responsive, and user-friendly digital experiences. 
        Our mission is to deliver high-quality solutions that empower people and businesses to grow and succeed.
      </p>
      <p class="text-black text-lg mt-4">
        With years of experience and creativity, we turn ideas into reality. Whether it’s a website, app, or branding — we care about every detail.
      </p>
    </div>
    <div>
      <img src="./images/chieve2.jpg" alt="Team Photo" class="rounded-lg shadow-lg w-130 h-130 object-cover">
    </div>
  </div>
</section>

 
<!-- Food Gallery Section -->
<div class="mt-16">
  <h1 class="text-2xl font-semibold text-black font-2xl mb-6 text-center">Our Special Dishes</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <img src="./images/burger.jpg" alt="Food 1" class="rounded-lg h-100 shadow hover:scale-105 transition duration-300">
    <img src="./images/pizza.png" alt="Food 2" class="rounded-lg h-100 shadow hover:scale-105 transition duration-300">
    <img src="./images/cupcake.jpg" alt="Food 3" class="rounded-lg h-100 shadow hover:scale-105 overflow-x-hidden transition duration-300">
    <img src="./images/food1.jog.jpg" alt="Food 4" class="rounded-lg h-100 shadow w-130 hover:scale-105 transition duration-300">
    <img src="./images/food2.jpg" alt="Food 5" class="rounded-lg h-100 shadow w-130 hover:scale-105 transition duration-300">
    <img src="./images/cupcake2.jpg" alt="Food 6" class="rounded-lg h-100 w-130 shadow hover:scale-105 transition duration-300">
  </div>
</div>
   
      <!-- section ended -->
    <br>
    <br>
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-4xl font-bold text-gray-900 mb-4">About Our Restaurant</h2>
    <p class="text-gray-900 mb-10">We serve delicious meals made with love and fresh ingredients. Come and enjoy a delightful experience.</p>

    <!-- Gallery -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
      <div class="bg-gray-100 rounded shadow hover:shadow-lg transition">
        <img src="./images/gc.webp" alt="Food 1" class="w-full h-80 rounded-t">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Grilled Chicken</h3>
          <p class="text-sm text-gray-600">$12.99</p>
        </div>
      </div>
      <div class="bg-gray-100 rounded shadow hover:shadow-lg transition">
        <img src="./images/pasta.webp" alt="Food 2" class="w-full h-80 rounded-t">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Fresh Pasta</h3>
          <p class="text-sm text-gray-600">$9.99</p>
        </div>
      </div>
      <div class="bg-gray-100 rounded shadow hover:shadow-lg transition">
<img src="./images/salad.webp" alt="Food 3" class="w-full h-80 rounded-t">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Vegan Salad</h3>
          <p class="text-sm text-gray-600">$7.49</p>
        </div>
      </div>
    </div>

  
    <div class="bg-gray-100 p-6 rounded shadow-md">
      <h3 class="text-2xl font-bold text-gray-800 mb-2">Hungry already?</h3>
      <p class="text-gray-700 mb-4">Reserve your table now and enjoy a memorable meal.</p>
    </div>
  </div>
</section>
<!-- endsectiom -->
 <!-- footer -->
   <footer class="bg-gray-900 text-white py-10">
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