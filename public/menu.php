<?php 
// session_start();
include "connect.php";
$dastor = "select * from food";
$allfood = $connect->query($dastor);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu</title>
    <!-- <link rel="stylesheet" href="../fontawesome-free-6.7.2-web/css/all.min.css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
       <?php 
       include "navbar.php";
       ?>
     <!-- nav end -->
      <!-- menu start -->
       <?php
      if($allfood->num_rows>0){
        ?>
        <div class="w-full py-8 mx-auto flex flex-col items-center gap-3">
          <h1 class="font-bold text-2xl lg:text-3xl lg:uppercase text-green-700">Our Special Foods</h1>
          <p class="text-center p-2">Enjoy Your Meal In A Friendly Space and Experience new flovers.</p>
        
        <div class="w-full bg-[url(../public/images/burger-with-melted-cheese.jpg.webp)]  bg-cover gap-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 max-w-7xl mx-auto">
              <?php 
            while($row = $allfood ->fetch_assoc()){
                ?>    
        <div class="flex flex-col h-fit w-full rounded shadow p-4">
                 <img class="h-54 w-full rounded" src="./images/<?php echo $row ['imgurl'] ?>" alt="">
                <div class="w-full flex gap-7 justify-around text-white">
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['food_name'] ?></h1>
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['price'] ?>AF</h1>
                </div>
                <!-- <button class="text-xl font-semibold"> -->
                <a class="text-xl text-right font-semibold" href="more.php?id=<?php echo $row['food_id'] ?>">More</a>
                <!-- </button> -->
                 </div>
                <?php } ?>
             
              </div>
              </div>
        <?php } ?>
        <!-- footer start -->
        <?php
        include "footer.php";
        ?>
</body>
</html>