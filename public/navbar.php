<!-- <nav class='h-20 px-3 bg-black/40 w-full fixed top-0 flex justify-between items-center text-white border-b-[1px] border-b-white'>
        <img src="../public/images/logo.png" alt="" class='h-20 w-20 rounded-full'>
        <ul class='flex flex-row gap-20 text-[20px] items-center'>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Our menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <button class=' font-bold rounded-md py-1.5 h-fit px-6 text-[18px] bg-green-700 text-white '> <a href="logout.php">Log out</a></button>
     </nav> -->


     <?php 
     session_start();
     ?>
     <nav class='h-20 z-50 px-3 bg-black/40 backdrop-blur-md w-full fixed top-0 left-0 text-white border-b-[1px] border-b-white'>
      <div class='flex justify-between items-center'>
        <img src="../public/images/res.png" alt="" class='h-full w-20 object-cover rounded-full'>
        <ul class='flex flex-row gap-20 text-[20px] items-center'>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Our menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
       <div class="flex gap-8">
        <?php
        if(isset($_SESSION['username'])){
          ?>
          <button class="font-bold  rounded-md px-4 py-1 text-[18px] bg-green-700 text-white hover:bg-black"><a href="logout.php">Log out</a></button>
          <?php
        }else{
        ?>
        <button class=' font-bold rounded-md px-4 py-1 text-[18px] hover:bg-black bg-green-700 text-white '> <a href="login.php">Login</a></button>
        <button class=' font-bold rounded-md px-4 py-1 text-[18px] bg-green-700 text-white hover:bg-black '> <a href="insertAdmin.php">Sign up</a></button>
        <?php
        }
        ?>

      </div>
    </div>
     </nav>