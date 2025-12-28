<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="p-0 m-0 ">
       <div class="h-screen bg-center bg-conic-180  bg-cover w-full gul"  id="hero">
    <!-- nav  started -->
     <?php  
      include "navbar.php";
     ?>
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
   <?php
   include "footer.php";
   ?>

  <!-- footer -->
</body>
</html>